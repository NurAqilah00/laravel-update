@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
	<div class="col-xl-12 col-lg-12 col-md-12">
		<div class="card shadow-sm my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="col-lg-12">
						<div class="login-form">
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						    <h2 class="m-0 font-weight-bold text-primary">Add Vendor Information</h2>
						    <input type="text" placeholder="Search By Phone" v-model="searchTerm" class="form-control" style="width: 300px;margin-right: -900px;" />
			
					        </div>

                            @if(Session::has('vendor_add'))
                            <span>{{Session::get('vendor_add')}}</span>
                            @endif

                            <br>
                            <br>
                            <form action="{{route('save.vendor')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<div class="form-row">
										<div class="col-mstore-productd-6">
											<input type="text" class="form-control" placeholder="Enter Vendor Name" name="vendor_name">
                                        </div>
									</div>
								</div>

								<div class="form-group">
									<div class="form-row">
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Enter Vendor Number" name='vendor_num'>
								        </div>
                                    </div>
                                </div>

			                    <div class="form-group">
									<div class="form-row">
										<div class="col-mstore-productd-6">
											<input type="text" class="form-control" placeholder="Enter Vendor Email" name="vendor_email">
										</div>
									</div>
								</div>

                                <div class="form-group">
									<div class="form-row">
										<div class="col-mstore-productd-6">
											<input type="text" class="form-control" placeholder="Enter Vendor Address" name="vendor_address">
										</div>
									</div>
								</div>
							

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Submit</button>
								</div>
							</form>
							<div class="text-center">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
