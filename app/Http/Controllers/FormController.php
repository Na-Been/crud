<?php

namespace App\Http\Controllers;

use App\Entities\Blog;
use App\Http\Controllers\Request\BlogRequest;
use App\Http\Repositories\BlogRepository;
use App\Http\Resources\Resource\BlogResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{

    protected $repository;

    public function __construct()
    {
        $this->repository = new BlogRepository(new Blog());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return BlogResource
     */
    public function store(BlogRequest $blogRequest)
    {
        DB::beginTransaction();
        try {
            $blog = $this->repository->create($blogRequest->all());
            $blog->setStatus('pending');
            DB::commit();
//            return new BlogResource($blog);
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            Log::error($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $blogRequest, $id)
    {
        DB::beginTransaction();
        try {
            $blog = $this->repository->update($id, $blogRequest->all());
            DB::commit();
            return new BlogResource($blog);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
