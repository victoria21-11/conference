<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Http\Requests\Admin\Conference\{
    Store,
    Update,
    Index,
    Delete
};

class ConferenceController extends Controller
{

    public function getTitle()
    {
        return trans('admin.conferences.title');
    }

    public function index(Index $request)
    {
        $filters = $request->validated();
        $paginatedData = Conference::ofFilters($filters)
            ->orderBy($request->get('sort_column', 'id'), $request->get('sort_direction', 'desc'))
            ->paginate(env('ADMIN_PAGINATION'));

        if($request->ajax()) {
            return response([
                'paginatedData' => $paginatedData,
                'filters' => $filters,
                'request' => http_build_query($filters),
            ]);
        }

        return view('admin.conferences.index', [
            'title' => $this->getTitle(),
        ]);
    }

    public function create()
    {
        return view('admin.conferences.create', [
            'title' => trans('admin.conferences.create'),
        ]);
    }

    public function store(Store $request, Conference $conference)
    {
        $conference = Conference::create($request->validated());
        return response([]);
    }

    public function edit(Conference $conference)
    {
        return view('admin.conferences.edit', [
            'title' => "Редактировать $conference->title",
            'data' => $conference,
        ]);
    }

    public function update(Update $request, Conference $conference)
    {
        $conference->update($request->validated());
        return response([]);
    }

    public function destroy(Delete $request, Conference $conference)
    {
        $conference->delete();
        return response([]);
    }
}
