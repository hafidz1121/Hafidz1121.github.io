"use strict";

// Class definition
var KTModalCustomersAdd = function () {
    var submitButton;
    var cancelButton;
	var closeButton;
    var validator;
    var form;
    var modal;

    // Init form inputs
    var handleForm = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		validator = FormValidation.formValidation(
			form,
			{
				fields: {
                    'nama': {
						validators: {
							notEmpty: {
								message: 'Nama is required'
							}
						}
					},
                    'nim': {
						validators: {
							notEmpty: {
								message: 'NIM is required'
							}
						}
					},
					'prodi': {
						validators: {
							notEmpty: {
								message: 'Prodi is required'
							}
						}
					},
					'noTelp': {
						validators: {
							notEmpty: {
								message: 'No Telepon is required'
							}
						}
					},
					'alamat': {
						validators: {
							notEmpty: {
								message: 'Alamat is required'
							}
						}
					},
					'tgl_lahir': {
						validators: {
							notEmpty: {
								message: 'Tanggal Lahir 1 is required'
							}
						}
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		);

		// Revalidate alamat field. For more info, plase visit the official plugin site: https://select2.org/
        $(form.querySelector('[name="alamat"]')).on('change', function() {
            // Revalidate the field when an option is chosen
            validator.revalidateField('alamat');
        });

		// Action buttons
		submitButton.addEventListener('click', function (e) {
			e.preventDefault();

			// Validate form before submit
			if (validator) {
				validator.validate().then(function (status) {
					console.log('validated!');

					if (status == 'Valid') {
						submitButton.setAttribute('data-kt-indicator', 'on');

						// Disable submit button whilst loading
						submitButton.disabled = true;

						// Check axios library docs: https://axios-http.com/docs/intro
						axios.post(submitButton.closest('form').getAttribute('action'), new FormData(form)).then(function (response) {
							console.log(response.status);
							if (response.status == 200) { 
								setTimeout(function() {
									submitButton.removeAttribute('data-kt-indicator');
									
									Swal.fire({
										text: "Form has been successfully submitted!",
										icon: "success",
										buttonsStyling: false,
										confirmButtonText: "Ok, got it!",
										customClass: {
											confirmButton: "btn btn-primary"
										}
									}).then(function (result) {
										if (result.isConfirmed) {
											// Hide modal
											modal.hide();
		
											// Enable submit button after loading
											submitButton.disabled = false;
		
											// Redirect to customers list page
											window.location = form.getAttribute("data-kt-redirect");
										}
									});							
								}, 2000);   						
							}
						}).catch(function (error) {
							if (error.response && error.response.status == 422) {
								// Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
								Swal.fire({
									text: "Sorry, NIM already exits, please check NIM.",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn btn-primary"
									}
								}).then(function (result) {
									if (result.isConfirmed) {
										// Hide loading indication
										submitButton.removeAttribute('data-kt-indicator');

										// Enable submit button after loading
										submitButton.disabled = false;
									}
								});
							} else {
								Swal.fire({
									text: "Sorry, looks like there are some errors detected, please try again.",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn btn-primary"
									}
								}).then(function (result) {
									if (result.isConfirmed) {
										// Hide loading indication
										submitButton.removeAttribute('data-kt-indicator');
										
										// Enable submit button after loading
										submitButton.disabled = false;
									}
								});
							}
						});
					} else {
						Swal.fire({
							text: "Sorry, looks like there are some errors detected, please try again.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-primary"
							}
						});
					}
				});
			}
		});

        cancelButton.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form	
                    modal.hide(); // Hide modal				
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

		closeButton.addEventListener('click', function(e){
			e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form	
                    modal.hide(); // Hide modal				
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
		})
    }

    return {
        // Public functions
        init: function () {
            // Elements
            modal = new bootstrap.Modal(document.querySelector('#kt_modal_add_customer'));

            form = document.querySelector('#kt_modal_add_customer_form');
            submitButton = form.querySelector('#kt_modal_add_customer_submit');
            cancelButton = form.querySelector('#kt_modal_add_customer_cancel');
			closeButton = form.querySelector('#kt_modal_add_customer_close');

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTModalCustomersAdd.init();
});