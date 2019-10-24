                    <table class="table table-bordered" id="ShowAllDataAjax">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key=>$product)
                                <tr>
                                    <th>{{ $key + 1 }}</th>
                                    <th>{{ $product->name }}</th>
                                    <th>{{ $product->qty }}</th>
                                    <th>{{ $product->price }}</th>
                                    <th>{{ $product->status }}</th>
                                    <th>
                                        <a href="" class="btn btn-info btn-sm">View</a>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>