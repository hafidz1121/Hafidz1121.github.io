<div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
    <!--begin::Modal header-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header flex-stack">
                <!--begin::Title-->
                <h2>Choose An Authentication Method</h2>
                <!--end::Title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                <!--begin::Options-->
                <div data-kt-element="options">
                    <!--begin::Notice-->
                    <p class="text-muted fs-5 fw-semibold mb-10">In addition to your username and password, you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
                    <!--end::Notice-->
                    <!--begin::Wrapper-->
                    <div class="pb-10">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
                            <i class="ki-duotone ki-setting-2 fs-4x me-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <span class="d-block fw-semibold text-start">
                                <span class="text-dark fw-bold d-block fs-3">Authenticator Apps</span>
                                <span class="text-muted fw-semibold fs-6">Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
                            </span>
                        </label>
                        <!--end::Option-->
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
                            <i class="ki-duotone ki-message-text-2 fs-4x me-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                            <span class="d-block fw-semibold text-start">
                                <span class="text-dark fw-bold d-block fs-3">SMS</span>
                                <span class="text-muted fw-semibold fs-6">We will send a code via SMS if you need to use your backup login method.</span>
                            </span>
                        </label>
                        <!--end::Option-->
                    </div>
                    <!--end::Options-->
                    <!--begin::Action-->
                    <button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
                    <!--end::Action-->
                </div>
                <!--end::Options-->
                <!--begin::Apps-->
                <div class="d-none" data-kt-element="apps">
                    <!--begin::Heading-->
                    <h3 class="text-dark fw-bold mb-7">Authenticator Apps</h3>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <div class="text-gray-500 fw-semibold fs-6 mb-10">Using an authenticator app like
                    <a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
                    <a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
                    <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                    <a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for you to enter below.
                    <!--begin::QR code image-->
                    <div class="pt-5 text-center">
                        <img src="{{asset('assets_admin')}}/media/misc/qr.png" alt="" class="mw-150px" />
                    </div>
                    <!--end::QR code image--></div>
                    <!--end::Description-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                                <div class="fs-6 text-gray-700">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code:
                                <div class="fw-bold text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div></div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--begin::Form-->
                    <form data-kt-element="apps-form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-center">
                            <button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">Cancel</button>
                            <button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Options-->
                <!--begin::SMS-->
                <div class="d-none" data-kt-element="sms">
                    <!--begin::Heading-->
                    <h3 class="text-dark fw-bold fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
                    <!--end::Heading-->
                    <!--begin::Notice-->
                    <div class="text-muted fw-semibold mb-10">Enter your mobile phone number with country code and we will send you a verification code upon request.</div>
                    <!--end::Notice-->
                    <!--begin::Form-->
                    <form data-kt-element="sms-form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-center">
                            <button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">Cancel</button>
                            <button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::SMS-->
            </div>
            <!--begin::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal header-->
</div>