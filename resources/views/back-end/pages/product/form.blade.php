@extends('back-end.layouts.main')
@section('title', 'สร้างสินค้า')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">สร้างสินค้า</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('backend.product.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id ?? '' }}">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="name" class="form-label">ชื่อสินค้า</label>
                        <div class="">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $product->name ?? '' }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name" class="form-label">สถานะ</label>
                        <div class="">
                            <select name="status" id="" class="form-control"
                                value="{{ $product->status ?? '' }}">>
                                <option value="active">เปิดใช้งาน</option>
                                <option value="inactive">ปิดใช้งาน</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name" class="form-label">หมวดหมู่สินค้า</label>
                        <div class="">
                            <select name="category_id" id="" class="form-control"
                                value="{{ $product->category ?? '' }}">>
                                @foreach ($categorys as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mt-3 text-right">
                        <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
