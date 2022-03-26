<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = [
            [
                'id' => 1,
                'tag_name' => 'Ciencia',
                'count' => 2,
            ],
            [
                'id' => 2,
                'tag_name' => 'Cultura',
                'count' => 3,
            ],
            [
                'id' => 3,
                'tag_name' => 'Tecnología',
                'count' => 5,
            ],
            [
                'id' => 3,
                'tag_name' => 'Cultura',
                'count' => 5,
            ],
            [
                'id' => 3,
                'tag_name' => 'Ocio',
                'count' => 1,
            ],
        ];
        return view('tag.index',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}