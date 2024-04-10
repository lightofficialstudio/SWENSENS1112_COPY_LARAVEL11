@extends('back-end.layouts.main')
@section('title', 'จัดการสินค้า')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ตารางการจัดการสินค้า</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="mb-3 ">
                    <a href="{{ route('backend.product.create') }}" class="btn btn-primary">เพิ่มข้อมูล</a>
                </div>
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 190.775px;">
                                            #</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 309.712px;">ชื่อรายการสินค้า</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 309.712px;">หมวดหมู่สินค้า</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 137.288px;">สถานะ</th>

                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 129.8px;">จัดการ</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($products as $index => $product)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->status }}</td>
                                            <td>
                                                <a href="{{ route('backend.product.edit', $product->id) }}"
                                                    class="btn btn-warning">แก้ไข</a>
                                                <form action="{{ route('backend.product.destroy', $product->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('post')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่ ?')">ลบ</button>
                                                </form>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
