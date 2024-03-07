@extends('admin_page.layouts.masterpage')

<!DOCTYPE html>
<html lang="en">

	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true" class="app-default">
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		
		@section('content')
			<!--begin::Drawers-->
					@include('admin_page.components.begin')
				<!--begin::Activities drawer-->
					@include('admin_page.components.activityDrawer')
				<!--begin::Chat drawer-->
					@include('admin_page.components.chatDrawer')
				<!--begin::Shop drawer-->
					@include('admin_page.components.shopDrawer')
			<!--end::Drawers-->

			<!--begin::Scrolltop-->
				@include('admin_page.components.scrollTop')
			<!--end::Scrolltop-->

			<!--begin::Modals-->
				<!--begin::Modal - Upgrade plan-->
					@include('admin_page.components.modalUpgrade')
				<!--begin::Modal - Create account-->
					@include('admin_page.components.modalAccount')
				<!--begin::Modal - Create App-->
					@include('admin_page.components.modalApp')
				<!--begin::Modal - View Users-->
					@include('admin_page.components.modalUsers')
				<!--begin::Modal - Users Search-->
					@include('admin_page.components.modalSearch')
				<!--begin::Modal - Invite Friends-->
					@include('admin_page.components.modalInvite')
			<!--end::Modals-->
		@endsection
	</body>
</html>