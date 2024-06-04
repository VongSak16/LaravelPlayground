<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Profile Picture -->
        <div class="mt-4 block font-medium text-sm text-gray-700 dark:text-gray-300">
            <x-input-label for="file" :value="__('Profile Picture')" />
            <input id="file"
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full"
                type="file" name="file" onchange="previewImage(event)" />
            <x-input-error :messages="$errors->get('file')" class="mt-2" />
        </div>

        <!-- Image Preview -->
        <div class="mt-4">
            {{-- <img id="image_preview" class="w-32 h-32 object-cover" /> --}}
            <img class="rounded w-36 h-36" id="image_preview" src="/assets/no-img.jpg" alt="Extra large avatar"
                width="200px"​>
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('image_preview');
                preview.src = reader.result;
            }
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-guest-layout>

{{-- @extends('layout.blank')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Register</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control"​
                                            id="name"​​ required autofocus autocomplete="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" name="username" class="form-control"​
                                            id="username"​​ required autofocus autocomplete="username">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control"​
                                            id="email"​​ required autofocus autocomplete="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" id="password" name="password" type="password"
                                            class="form-control"​ id="password"​​ required autofocus
                                            autocomplete="new-password">
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="text" id="password_confirmation" name="password_confirmation"
                                            type="password" class="form-control"​ id="password_confirmation"​​ required
                                            autofocus autocomplete="new-password">
                                    </div>

                                    <div class="form-group">
                                        <label for="file">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="previewFile()" type="file" name="file"
                                                    class="custom-file-input" id="file">
                                                <label class="custom-file-label" for="file">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <a href="{{ route('login') }}">Already registered?</a>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <img src="/assets/no-img.jpg" id="imgshow" width="220" />
                    </div>
                    <!-- /.col-md-6 -->
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection --}}
