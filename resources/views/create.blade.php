@extends('layout.main')
@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-6">
            <!-- Default form register -->
            <form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">

                {{csrf_field()}}
                <p class="h4 mb-4">Add Student</p>

                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endforeach
                @endif

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstname" placeholder="First name">
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastname" placeholder="Last name">
                    </div>
                </div>

                <!-- E-mail -->
                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

                <!-- Phone number -->
                <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit">Add</button>


            </form>
            <!-- Default form register -->
        </div>
    </div>
</div>

@endsection
