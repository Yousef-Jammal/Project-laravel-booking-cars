@extends('admin.master')
@section('pageName', 'Users Mangment')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
      <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="background-image: linear-gradient(195deg, #ffa633 0%, #ffa633 100%)">
                  <div style="display: flex; justify-content: space-between; align-items: center;">
                      <h6 class="text-white text-capitalize ps-3">Losser table</h6>
                      {{-- <a href="{{ route('admin_create_user') }}" class="btn btn-beautiful" style="margin-right: 20px; color: #fff;">
                    Add User
                </a> --}}
            </div>
        </div>
    </div>
    <div class="card-body px-0 pb-2" style="height: 435px">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Users</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Yousef</h6>
                            </div>
                        </div>
                    </td>


                    <td class="align-middle" style="text-align: center">
                        <label>
                            <input type="radio" name="status" value="accept" class="text-secondary font-weight-bold text-xs" style="margin: 0 3px 0;">
                            Accept
                        </label>
                        <label>
                            <input type="radio" name="status" value="not_accept" class="text-secondary font-weight-bold text-xs" style="margin: 0 3px 0;">
                            Not Accept
                        </label>
                </td>


            </tr>
              </tbody>
            </table>
            <div style="display: flex; justify-content: center; align-items: center; padding: 10px 0">
                {{-- {{$users->links()}} --}}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection

@section('admin_style')
<style>
    .btn-beautiful {
        background-image: linear-gradient(45deg, #ff6a00, #ee0979);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        text-transform: uppercase;
        font-weight: bold;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .btn-beautiful::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300%;
        height: 300%;
        background: rgba(255, 255, 255, 0.15);
        transition: all 0.3s ease-in-out;
        transform: translate(-50%, -50%) rotate(45deg);
        opacity: 0;
    }

    .btn-beautiful:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
    }

    .btn-beautiful:hover::before {
        opacity: 1;
    }

    .btn-beautiful:active {
        transform: scale(1);
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('admin_scripts')
<script>
    document.querySelector('.btn-beautiful').addEventListener('mouseover', function() {
        this.style.backgroundImage = 'linear-gradient(45deg, #ee0979, #ff6a00)';
    });

    document.querySelector('.btn-beautiful').addEventListener('mouseout', function() {
        this.style.backgroundImage = 'linear-gradient(45deg, #ff6a00, #ee0979)';
    });
</script>
@endsection
