<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\DsDivision;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search') && !empty($request->search)) {
            $members = Member::where('lastname', 'LIKE', '%'.$request->search.'%')->paginate(8);
        } else {
            $members = Member::paginate(8);
        }
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dsDivisions = DsDivision::pluck('name', 'id');
        return view('members.create', compact('dsDivisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        try {
            $member = new Member;

            $member->firstname = $validated['firstname'];
            $member->lastname = $validated['lastname'] . (ctype_upper($validated['summery']) ? ' '.$validated['summery'] : '');
            $member->dob = $validated['dob'] ?? null;
            $member->summery = $validated['summery'];
            $member->ds_division_id = $validated['ds_division_id'] ?? null;
            $member->email = $validated['email'] ?? null;

            $member->save();

            return redirect()->route('members.index')->with('success', 'Member created');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withInput()->with('error', 'Member create failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('members.view', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        $dsDivisions = DsDivision::pluck('name', 'id');
        return view('members.edit', compact('dsDivisions', 'member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        $validated = $request->validated();

        try {
            $member->firstname = $validated['firstname'];
            $member->lastname = $validated['lastname']; // it's not mentioned this for update in requirements (task overview #3). (ctype_upper($validated['summery']) ? ' '.$validated['summery'] : '');
            $member->dob = $validated['dob'];
            $member->summery = $validated['summery'];
            $member->ds_division_id = $validated['ds_division_id'];
            $member->email = $validated['email'];

            $member->save();

            return redirect()->route('members.index')->with('success', 'Member updated');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withInput()->with('error', 'Member update failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        try {
            $member->delete();

            return redirect()->route('members.index')->with('success', 'Member deleted');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Member delete failed');
        }
    }
}
