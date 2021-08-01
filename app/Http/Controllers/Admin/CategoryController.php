<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Repositories\Categories\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(
        // PostRepositoryInterface $postRepository,
        CategoryRepositoryInterface $categoryRepository
    )

    {
        // $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
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
        $categories = $this->categoryRepository->all();
        return view('dashboard.new-category', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required|min:10',
        ]);

        Category::create([
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('slug')),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('categories.create')
            ->with('success', 'Категория успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $category = Category::find($id);
        return view('dashboard.edit-category', [
            'category' => $this->categoryRepository->findCategory($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required|min:10',
        ]);

        $category = $this->categoryRepository->findCategory($id);
        $category->title = $request->get('title');
        $category->description = $request->get('description');
        $category->slug = Str::slug($request->get('slug'));
        $category->save();

        return redirect()->route('categories.create')
        ->with('success', 'Категория успешно отредактирована');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
