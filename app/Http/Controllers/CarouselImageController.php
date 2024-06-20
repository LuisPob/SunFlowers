<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CarouselImage;
use Illuminate\Http\Request;

/**
 * Class CarouselImageController
 * @package App\Http\Controllers
 */
class CarouselImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carouselImages = CarouselImage::paginate();
        $company = Company::findOrFail(1);

        return view('carousel-image.index', compact('carouselImages', 'company'))
            ->with('i', (request()->input('page', 1) - 1) * $carouselImages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carouselImage = new CarouselImage();
        return view('carousel-image.create', compact('carouselImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate(CarouselImage::$rules);

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('carousel', ['disk' => 'public']);
            $validatedData['image_path'] = basename($path);
        }

        $carouselImage = CarouselImage::create($validatedData);

        return redirect()->route('carousel-image.index')
            ->with('success', 'CarouselImage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carouselImage = CarouselImage::find($id);

        return view('carousel-image.show', compact('carouselImage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carouselImage = CarouselImage::find($id);

        return view('carousel-image.edit', compact('carouselImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CarouselImage $carouselImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarouselImage $carouselImage)
    {
        request()->validate(CarouselImage::$rules);

        $carouselImage->update($request->all());

        return redirect()->route('carousel-image.index')
            ->with('success', 'CarouselImage updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $carouselImage = CarouselImage::find($id)->delete();

        return redirect()->route('carousel-image.index')
            ->with('success', 'CarouselImage deleted successfully');
    }
}
