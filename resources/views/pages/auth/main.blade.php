<x-auth-layout title="Masuk">
    <div id="page_login">
		<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
			<form class="form w-100" novalidate="novalidate" id="form_login">
				<div class="text-center mb-10">
					 <h1 class="text-dark mb-3">{{config('app.name')}}</h1> 
					<div class="text-gray-400 fw-bold fs-4">Don't have an account yet?
					<a href="javascript:;" onclick="auth_content('page_register');" class="link-primary fw-bolder">Register</a></div>
				</div>
				<div class="fv-row mb-10">
					<label class="form-label fs-6 fw-bolder text-dark">Username</label>
	    			<input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
				</div>
				<div class="fv-row mb-10">
					<div class="d-flex flex-stack mb-2">
						<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
					</div>
	    			<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
				</div>
				<div class="text-center">
					<button type="submit" id="tombol_login" onclick="handle_post('#tombol_login','#form_login','{{route('auth.login')}}');" class="btn btn-lg btn-primary w-100 mb-5">
						<span class="indicator-label">Login</span>
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
				</div>
			</form>
		</div>
    </div>
    <div id="page_register">
        <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <form class="form w-100" novalidate="novalidate" id="form_register">
                <div class="mb-10 text-center">
                    <h1 class="text-dark mb-3">Register</h1>
                    <div class="text-gray-400 fw-bold fs-4">Already have an account?
                    <a href="javascript:;" onclick="auth_content('page_login');" class="link-primary fw-bolder">Log in here</a></div>
                </div>
                <div class="row fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Username</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="username" autocomplete="off" />
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Password</label>
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                </div>
                <div class="text-center">
                    <button type="button" id="tombol_register" onclick="handle_post('#tombol_register','#form_register','{{route('auth.register')}}');" class="btn btn-lg btn-primary">
                        <span class="indicator-label">Register</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @section('custom_js')
        <script>
            auth_content('page_login');
        </script>
    @endsection
</x-auth-layout>