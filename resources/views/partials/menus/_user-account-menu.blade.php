<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
	<!--begin::Menu item-->
	<div class="menu-item px-3">
		<div class="menu-content d-flex align-items-center px-3">
			<!--begin::Avatar-->
			<div class="symbol symbol-50px me-5">
				<img alt="Logo" src="{{ image('avatars/300-1.jpg') }}" />
			</div>
			<!--end::Avatar-->
			<!--begin::Username-->
			<div class="d-flex flex-column">
				<div class="fw-bold d-flex align-items-center fs-5">Max Smith
				<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
				<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
			</div>
			<!--end::Username-->
		</div>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/" class="menu-link px-5">My Profile</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/" class="menu-link px-5">
			<span class="menu-text">My Projects</span>
			<span class="menu-badge">
				<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
			</span>
		</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
		<a href="#" class="menu-link px-5">
			<span class="menu-title">My Subscription</span>
			<span class="menu-arrow"></span>
		</a>
		<!--begin::Menu sub-->
		<div class="menu-sub menu-sub-dropdown w-175px py-4">
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link px-5">Referrals</a>
			</div>
			<!--end::Menu item-->
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link px-5">Billing</a>
			</div>
			<!--end::Menu item-->
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link px-5">Payments</a>
			</div>
			<!--end::Menu item-->
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link d-flex flex-stack px-5">Statements
				<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
			</div>
			<!--end::Menu item-->
			<!--begin::Menu separator-->
			<div class="separator my-2"></div>
			<!--end::Menu separator-->
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<div class="menu-content px-3">
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
						<span class="form-check-label text-muted fs-7">Notifications</span>
					</label>
				</div>
			</div>
			<!--end::Menu item-->
		</div>
		<!--end::Menu sub-->
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
		<a href="/" class="menu-link px-5">My Statements</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu separator-->
	<div class="separator my-2"></div>
	<!--end::Menu separator-->
	<!--begin::Menu item-->
	<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
		<a href="#" class="menu-link px-5">
			<span class="menu-title position-relative">Language
			<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
			<img class="w-15px h-15px rounded-1 ms-2" src="{{ image('flags/united-states.svg') }}" alt="" /></span></span>
		</a>
		<!--begin::Menu sub-->
		<div class="menu-sub menu-sub-dropdown w-175px py-4">
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link d-flex px-5 active">
				<span class="symbol symbol-20px me-4">
					<img class="rounded-1" src="{{ image('flags/united-states.svg') }}" alt="" />
				</span>English</a>
			</div>
			<!--end::Menu item-->
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link d-flex px-5">
				<span class="symbol symbol-20px me-4">
					<img class="rounded-1" src="{{ image('flags/spain.svg') }}" alt="" />
				</span>Spanish</a>
			</div>
			<!--end::Menu item-->
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link d-flex px-5">
				<span class="symbol symbol-20px me-4">
					<img class="rounded-1" src="{{ image('flags/germany.svg') }}" alt="" />
				</span>German</a>
			</div>
			<!--end::Menu item-->
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link d-flex px-5">
				<span class="symbol symbol-20px me-4">
					<img class="rounded-1" src="{{ image('flags/japan.svg') }}" alt="" />
				</span>Japanese</a>
			</div>
			<!--end::Menu item-->
			<!--begin::Menu item-->
			<div class="menu-item px-3">
				<a href="/" class="menu-link d-flex px-5">
				<span class="symbol symbol-20px me-4">
					<img class="rounded-1" src="{{ image('flags/france.svg') }}" alt="" />
				</span>French</a>
			</div>
			<!--end::Menu item-->
		</div>
		<!--end::Menu sub-->
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5 my-1">
		<a href="/" class="menu-link px-5">Account Settings</a>
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item px-5">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
		<a href="{{ route('logout') }}" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
	</div>
	<!--end::Menu item-->
</div>
<!--end::User account menu-->
