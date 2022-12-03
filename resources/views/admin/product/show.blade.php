@extends('layouts.partials.admin')

@section('product')
    active
@endsection

@section('content')
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-12">
            <div class="card card-primary card-outline ">
                <div class="card-body box-profile">
                <div class="text-center">
                    <img class="" style="border-radius:6rem" width="200px" height="200px"
                    src="{{ Storage::url($product->image) }}" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center" style="color: blue">{{ $product->name }}</h3>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong><i class="fas fa-book mr-1"></i> Slug</strong>
                            <p class="text-muted">
                            {{ $product->slug }}
                            </p>
                        </div>

                    <div class="col-md-6">
                        <strong><i class="fas fa-book mr-1"></i> Title</strong>
                    <p class="text-muted">
                      {{ $product->title }}
                    </p>
                    </div>

                    <div class="col-md-6">
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Keyword</strong>
                    <p class="text-muted">{{ $product->keyword }}</p>
                    </div>


                    <div class="col-md-6">
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Short Description</strong>
                    <p class="text-muted">
                      <span class="tag tag-danger">{{ $product->short_description }}</span>
                    </p>
                    </div>

                    <div class="col-md-12">
                        <strong><i class="far fa-file-alt mr-1"></i> Description</strong>
                        <p class="text-muted">{{ $product->description }}</p>
                    </div>
                    </div>

                  </div>
                  <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-info float-right">Return Back</a>
                </div>
            </div>
        </div>

    </div>
@endsection
