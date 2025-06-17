import Swal from 'sweetalert2';

// Event listener for the Sweet Alert button
document.addEventListener('DOMContentLoaded', function () {

    const testButton = document.getElementById('btn_test_sweetalert');
    const testButton1 = document.getElementById('sweetalert1');
    const testButton2 = document.getElementById('sweetalert2');
    const testButton3 = document.getElementById('sweetalert3');
    const testButton4 = document.getElementById('sweetalert4');
    const testButton5 = document.getElementById('sweetalert5');
    const testButton6 = document.getElementById('sweetalert6');
    const testButton7 = document.getElementById('sweetalert7');


    if (testButton) {
        testButton.addEventListener('click', function () {
            console.log('Button clicked!'); // Add this line
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue?',
                icon: 'error',
                confirmButtonText: 'Cool'
            });
        });
    }

    if (testButton1) {
        testButton1.addEventListener('click', function () {
            console.log('Button1 clicked!'); // Add this line
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
            });
        });
    }

    if (testButton2) {
        testButton2.addEventListener('click', function () {
            console.log('Button2 clicked!');
            Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Saved!", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        });
    }

    if (testButton3) {
        testButton3.addEventListener('click', function () {
            console.log('Button3 clicked!');
            Swal.fire({
                title: "Custom animation with Animate.css",
                showClass: {
                    popup: `
                        animate__animated
                        animate__fadeInUp
                        animate__faster
                    `
                },
                hideClass: {
                    popup: `
                        animate__animated
                        animate__fadeOutDown
                        animate__faster
                    `
                }
            });
        });
    }

    if (testButton4) {
        testButton4.addEventListener('click', function () {
            console.log('Button4 clicked!');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                  });
                }
              });
        });
    }

    if (testButton5) {
        testButton5.addEventListener('click', function () {
            console.log('Button5 clicked!');
            Swal.fire({
                title: "Sweet!",
                text: "Modal with a custom image.",
                imageUrl: "https://unsplash.it/400/200",
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: "Custom image"
              });
        });
    }

    if (testButton6) {
        testButton6.addEventListener('click', function () {
            console.log('Button6 clicked!');
            Swal.fire({
                title: "Custom width, padding, color, background.",
                width: 600,
                padding: "3em",
                color: "#716add",
                background: "#fff url(/images/giphy.gif)",
                backdrop: `
                  rgba(0,0,123,0.4)
                  url("/images/hamiboom.gif")
                  left top
                  no-repeat
                `
              });
        });
    }

    if (testButton7) {
        testButton7.addEventListener('click', function () {
            console.log('Button7 clicked!');
            let timerInterval;
            Swal.fire({
                title: "Auto close alert!",
                html: "I will close in <b></b> milliseconds.",
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                  Swal.showLoading();
                  const timer = Swal.getPopup().querySelector("b");
                  timerInterval = setInterval(() => {
                    timer.textContent = `${Swal.getTimerLeft()}`;
                  }, 100);
                },
                willClose: () => {
                  clearInterval(timerInterval);
                }
              }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                  console.log("I was closed by the timer");
                }
              });
        });
    }
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).on("click", ".deleteExpense", function () {
        const id = $(this).data("id");
        console.log("Deleting ID:", id);

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            // background: "#fff url(/images/hamiboom.gif)",
            backdrop: `
            rgba(0,0,123,0.4)
            url("/images/a.gif")
            left top
            no-repeat
          `
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: `/deleteExpense/${id}`,
                    data: { _method: "DELETE" },
                    success: function (response) {
                        console.log("Response:", response);
                        if (response.status === 'success') {
                            Swal.fire({
                                title: response.title || "Deleted!",
                                text: response.msg || "Your file has been deleted.",
                                icon: response.type || "success",
                                background: "#fff url(/images/hamiboom.gif)",
                                backdrop: `
                                rgba(0,0,123,0.4)
                                url("/images/a.gif")
                                left top
                                no-repeat
                            `
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.msg || "An error occurred.",
                                icon: "error"
                            });
                        }
                    },
                });
            }
        });
    });

    // Initialize select_a
const selectA = VirtualSelect.init({
    ele: '#select_a',
    placeholder: "a",
    multiple: true,
    search: true,
    allOptionsSelectedText: "All",
    silentInitialValueSet: true,
    options: [
        { label: 'Option 1', value: '1' },
        { label: 'Option 2', value: '2' },
        { label: 'Option 3', value: '3' },
    ],
});

// Listen for changes in select_a
document.querySelector('#select_a').addEventListener('change', function() {
    const selectedValues = selectA.getValue();

    // Check if value '3' is selected
    if (selectedValues.includes('3')) {
        // Create a new div for select_b
        const selectBContainer = document.createElement('div');
        selectBContainer.className = 'mr-4 mb-4';
        selectBContainer.id = 'select_b';

        // Append the new div to the container
        document.querySelector('.d-flex').appendChild(selectBContainer);

        // Initialize select_b with new options
        VirtualSelect.init({
            ele: '#select_b',
            placeholder: "b",
            multiple: true,
            search: true,
            allOptionsSelectedText: "All",
            silentInitialValueSet: true,
            options: [
                { label: 'Option 4', value: '4' },
                { label: 'Option 5', value: '5' },
                { label: 'Option 6', value: '6' },
            ],
        });
    }
});

// // Initialize select_a
// const selectA = VirtualSelect.init({
//     ele: '#select_a',
//     placeholder: "a",
//     multiple: true,
//     search: true,
//     allOptionsSelectedText: "All",
//     silentInitialValueSet: true,
//     options: [
//         { label: 'Option 1', value: '1' },
//         { label: 'Option 2', value: '2' },
//         { label: 'Option 3', value: '3' },
//     ],
// });

// // Initialize select_b (starts empty)
// const selectB = VirtualSelect.init({
//     ele: '#select_b',
//     placeholder: "b",
//     multiple: true,
//     search: true,
//     allOptionsSelectedText: "All",
//     silentInitialValueSet: true,
//     options: [] // Start with empty options
// });

// // Listen for changes in select_a
// document.querySelector('#select_a').addEventListener('change', function() {
//     const selectedValues = selectA.getValue();

//     // Check if value '3' is selected
//     if (selectedValues.includes('3')) {
//         // Destroy select_b
//         console.log("vefore destroyed");
//         selectB.destroy();
//         console.log("destroyed");

//         // Re-initialize select_b with new options
//         VirtualSelect.init({
//             ele: '#select_b',
//             placeholder: "b",
//             multiple: true,
//             search: true,
//             allOptionsSelectedText: "All",
//             silentInitialValueSet: true,
//             options: [
//                 { label: 'Option 4', value: '4' },
//                 { label: 'Option 5', value: '5' },
//                 { label: 'Option 6', value: '6' },
//             ],
//         });
//     }
// });



    VirtualSelect.init({
        ele: '#select_c',
        placeholder: "c",
        multiple: true,
        search: true,
        allOptionsSelectedText: "All",
        silentInitialValueSet: true

    });
    VirtualSelect.init({
        ele: '#select_d',
        placeholder: "d",
        multiple: true,
        search: true,
        allOptionsSelectedText: "All",
        silentInitialValueSet: true

    });

    function getUserExpenses() {
        return $.ajax({
            url: "/getUserExpenses",
        });
    }

    function getExpenseCategory() {
        return $.ajax({
            url: "/getExpenseCategory",
        });
    }

    function getTotalExpensesAmount() {
        return $.ajax({
            url: "/getTotalExpensesAmount",
        });
    }















});


