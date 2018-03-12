<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyMemberRequest;
use App\Models\FamilyMember;
use Illuminate\Support\Facades\Log;

class FamilyMemberController extends Controller
{
    public function index()
    {
        return view('family_members.index');
    }

    public function store(FamilyMemberRequest $request)
    {
        FamilyMember::create($request->all());

        $familyMembers = FamilyMember::all();

        return compact('familyMembers');
    }

    public function update(FamilyMember $familyMember, FamilyMemberRequest $request)
    {
        $familyMember->update($request->all());

        $familyMembers = FamilyMember::all();

        return compact('familyMembers');
    }

    public function destroy(FamilyMember $familyMember)
    {
        try {
            $familyMember->delete();
        } catch (\Exception $e) {
            Log::debug($e);

            return;
        }

        $familyMembers = FamilyMember::all();

        return response()->json(compact('familyMembers'));
    }

    public function ajaxGetAll()
    {
        return FamilyMember::all();
    }
}
