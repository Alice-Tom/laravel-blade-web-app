<?php

namespace App\Http\Controllers;


use App\Http\Requests\BlogRequest;

use App\Services\Blog;

class BlogController extends Controller
{


    private $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = $this->blog->all();
        return view('dashboard.admin.blog.all-blogs', [
            'blogs' => $blogs
        ]);
    }


    public function indexPublic()
    {
        $blogs = $this->blog->all();
         return view('pages.resources',[
             'blogs'=>$blogs
         ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.admin.blog.add-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        $this->blog->create($request);

        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blog = $this->blog->findById($id);

        return view('pages.resources-view', [
            'blog' => $blog
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = $this->blog->findById($id);

        return view('dashboard.admin.blog.edit-blog', [
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        //

        $isUpdated = $this->blog->update($id, $request);

        return redirect('/all-blog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $isDeleted = $this->blog->deleteById($id);

        return redirect('/all-blog');

    }
}
