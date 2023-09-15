$(document).ready(function () {
    getCartCount()
    const couponCode = sessionStorage.getItem("couponCode")
    getCartData(couponCode)
    let minimumAgeDate = sessionStorage.getItem("minimunAgeDate")
    if(minimumAgeDate) {
        $(".dateOfBirth").attr("max", minimumAgeDate)
    }
});

function addClassRedirection() {
    window.location = './registration-detail.php'
}

function findOcc(arr, key) {
    let arr2 = [];

    arr.forEach((x) => {
        if (arr2.some((val) => { return val[key] == x[key] })) {
            arr2.forEach((k) => {
                if (k[key] === x[key]) {
                    k["occurrence"]++
                }
            })

        } else {
            let a = {}
            a[key] = x[key]
            a["occurrence"] = 1
            a["session"] = x.session
            a["dates"] = x.dates
            a["time"] = x.time
            a["tution"] = x.tuition
            arr2.push(a);
        }
    })
    return arr2
}


function getCartData(couponCode = "") {
    $("#invalidCouponErr").css("display", "none")
    let cartStudentArr = []
    let cartStudents = sessionStorage.getItem("cartStudents");
    if (cartStudents) {
        cartStudentArr = JSON.parse(cartStudents);
        if (cartStudents.length > 0) {
            const filteredArr = cartStudents.filter(x => x.classIds[0] === classId.toString())
            console.log("filteredArr:::", filteredArr)
            //$("#alreadyAddedStudentDiv").css("display", "block")
            //$('#alreadyAddedStudentTable tbody').empty()
            $.each(filteredArr, function (i, element) {
                $('#alreadyAddedStudentTable tbody').append("<tr id=" + element.uniqueId + ">\
                    <td>"+ element.firstName + "</td>\
                    <td>"+ element.lastName + "</td>\
                    <td>"+ element.dateOfBirth + "</td>\
                    <td><button type='button' class='btn' onclick='removeFromCart("+ element.uniqueId + ")'>Remove</button></td>\
                </tr>");
            });
        }
    }


    if (cartStudentArr.length > 0) {
        $("#emtyDiv").css("display", "none")
        $("#cartTableDiv").css("display", "block")
        let sessionId = localStorage.getItem("sessionId");
        if (!sessionId) {
            removeAllAndRedirect()
        }
        const data = JSON.stringify({
            "displayCartStudents": cartStudentArr,
            "couponCode": couponCode
        })

        $.ajax({
            url: `${base_url}/cart/multiple/display-cart`,
            method: 'post',
            crossDomain: true,
            headers: {
                "clientId": clientId,
                "secretKey": secretKey,
                "Content-Type": "application/json",
                "sessionId": sessionId
            },
            data,
            success: async (result) => {
                $("#cartTable tbody tr").remove();
                const classArr = result.classes
                const enrolledClassArr = result.enrolledClasses
                const classes = [...classArr, ...enrolledClassArr]
                const key = "classId"
                const classesArr = await findOcc(classes, key)
                $.each(classesArr, function (i, element) {
                    /*$('#cartTable tbody').append("<tr>\
                        <td>"+ element.session + "</td>\
                        <td><span style='cursor: pointer' onclick='displayStudentsByClassId(" + element.classId + ")'>" + element.occurrence + "</td>\
                        <td>"+ element.dates + "</td>\
                        <td>"+ element.time + "</td>\
                        <td>"+ element.tution + "</td>\
                        <td><button type='button' class='btn' onclick='openStudentModal("+ element.classId + ")'>Add Student</button> <button type='button' class='btn' onclick='removeFromCartByClassId(" + element.classId + ")'>Remove</button></td>\
                    </tr>");*/

                    $('#cartTableDiv2').append(`<div class="container-fluid row cart-1">
                    <div class="container cart-content col-lg-10 row p-0">
                        <div class="row p-0">
                            <div class="d-flex col-lg-6 heading p-0">
                                <div class="d-flex heading-left p-3">
                                    <p>${element.session}</p>
                                </div>
                                <div class="heading-right hide-show remove-mob">
                                    <button data-toggle="modal" data-target="#remove">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                         
                            <div class="col-lg-3 d-flex px-3 py-2">
                                
                                <li> <span class="hide-show">Date: </span> ${element.dates}</li>
                            </div>
                            <div class="d-flex col-lg-3 px-3 py-2">
                                
                                <li> <span class="hide-show">Time: </span> ${element.time}</li>
                            </div>

                        </div>
                        <hr class="m-0">
                        <div class="accordion p-0" id="accordionExample">
                            <div class="d-flex px-3">
                                <div class="d-flex justify-content-left">
                                    Student Details
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    </button>
                                </div>
                                <div class="justify-content-right hide-show edit-mob">
                                    <button type="button" data-toggle="modal" data-target="#edit">
                                        <i class="bi bi-pencil-fill "></i><span align="right" class="ps-2 hide-show">Edit</span>
                                    </button>
                                </div>
                            </div>

                            <div class="cart-details row  ">
                                <div class=" col-lg-9 row p-3 pt-0 accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="col-lg-5 py-2 px-0">
                                        <div class="d-flex para">
                                            <p class="">First Name</p>
                                            <p class="hide-show">: Lorem</p>
                                        </div>
                                        <span class="hide-mob">loremipsum@gmail.com</span>
                                    </div>
                                    <div class="col-lg-4 py-2 px-0">
                                        <div class="d-flex para">
                                            <p>Last Name</p>
                                            <p class="hide-show">: Ipsum</p>
                                        </div>
                                        <span class="hide-mob">+91 9003557123</span>
                                    </div>
                                    <div class="col-lg-3 py-2 px-0">
                                        <div class="d-flex para">
                                            <p>Date of birth</p>
                                            <p class="hide-show">: 22 Sep 2000</p>
                                        </div>
                                        <span class="hide-mob">22 Sep 2000</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 row p-0 tution-div">
                                    <div class="orange tution-fee">
                                        <p>Tution Fee +HST

                                        </p>
                                        <h4 align="right">$360</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 row p-0 hide-show">
                        <div class="orange tution-fee">
                            <p>Tution Fee +HST

                            </p>
                            <h4 align="right">${element.tution}</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 py-3 edit-remove ">

                        <button type="button" class="edit" data-toggle="modal" data-target="#edit">
                                <div class="d-block">
                                    <i class="bi bi-pencil-fill "></i>
                                    <p>Edit</p>
                                </div>
                        </button>
                        <button class="remove" data-toggle="modal" data-target="#remove">
                            <div class="d-block">
                                <i class="bi bi-trash"></i>
                                <p>Remove</p>
                            </div>
                        </button>
                    </div>


                </div>`);
                });

                if(result.cartSummary) {
                    const { cartSummary } = result
                    sessionStorage.setItem("couponCode", result.cartSummary.couponCode);

                    if(result.cartSummary.subTotal) {
                        $('#cartTable tbody').append("<tr>\
                                                <td></td>\
                                                <td></td>\
                                                <td></td>\
                                                <td><span style='float:right'>Sub-Total</span></td>\
                                                <td>"+ result.cartSummary.subTotal + "</td>\
                                                <td></td>\
                                            </tr>");
                    }
                    if(result.cartSummary.tuitionTax) {
                        $('#cartTable tbody').append("<tr>\
                                                <td></td>\
                                                <td></td>\
                                                <td></td>\
                                                <td><span style='float:right'>HST</span></td>\
                                                <td>"+ result.cartSummary.tuitionTax + "</td>\
                                                <td></td>\
                                            </tr>");
                    }
                    if(result.cartSummary.discount) {
                        $("#couponCodeDiv").css("display", "none")
                        $('#cartTable tbody').append("<tr>\
                                                <td></td>\
                                                <td></td>\
                                                <td>\
                                                <td><span style='float:right'>Discount</span></td>\
                                                <td>"+ result.cartSummary.discount +"</td></td>\
                                                <td><button type='button' class='btn' onclick='couponCodeRemove()' >Remove</button></td>\
                                            </tr>");
                    } else {
                        $("#couponCode").val("")
                        $("#couponCodeDiv").css("display", "block")
                    }
                    if(result.cartSummary.total) {
                        $('#cartTable tbody').append("<tr>\
                                                <td></td>\
                                                <td></td>\
                                                <td></td>\
                                                <td><span style='float:right'>Total</span></td>\
                                                <td>"+ result.cartSummary.total + "</td>\
                                                <td></td>\
                                            </tr>");
                    }
                }
            },
            error: function (jqXHR, exception) {
                if (jqXHR.responseJSON.error.code === 605) {
                    removeAllAndRedirect()
                } else if (jqXHR.responseJSON.error.code === 103 || jqXHR.responseJSON.error.code === 104) {
                    if(jqXHR.responseJSON.error.code === 103 && jqXHR.responseJSON.error.fieldName == "couponCode") {
                        $("#invalidCouponErr").css("display", "block").html(jqXHR.responseJSON.error.message)
                    } else {
                        alert(jqXHR.responseJSON.error.message)
                    }
                }
            }
        });
    } else {
        $("#cartTableDiv").css("display", "none")
        $("#emtyDiv").css("display", "block")
    }
}

function openStudentModal(classId) {
    console.log("classId::", typeof classId)
    let cartStudents = sessionStorage.getItem("cartStudents");
    if (cartStudents) {
        cartStudents = JSON.parse(cartStudents);
        if (cartStudents.length > 0) {
            const filteredArr = cartStudents.filter(x => x.classIds[0] === classId.toString())
            console.log("filteredArr:::", filteredArr)
            $("#alreadyAddedStudentDiv").css("display", "block")
            $('#alreadyAddedStudentTable tbody').empty()
            $.each(filteredArr, function (i, element) {
                $('#alreadyAddedStudentTable tbody').append("<tr id=" + element.uniqueId + ">\
                    <td>"+ element.firstName + "</td>\
                    <td>"+ element.lastName + "</td>\
                    <td>"+ element.dateOfBirth + "</td>\
                    <td><button type='button' class='btn' onclick='removeFromCart("+ element.uniqueId + ")'>Remove</button></td>\
                </tr>");
            });
        }
    }
    $('#studentForm').trigger("reset");
    $("#hidClassId").val(classId)
    $("#studentModal").find(".clone-div").remove();
    $('#studentModal').modal('show');
}

function addStudentForm() {
    let newFormBlock = $(".form-block-sample").clone();
    $(newFormBlock).attr('class', 'form-block clone-div');
    $(newFormBlock).css('display', 'block');
    $(".form-main").append(newFormBlock);
}

function DeleteStudentRow(event) {
    let div = $(event).closest('.form-block');
    $(div).remove();
}

$('#studentForm').on('submit', function (e) {
    e.preventDefault();
    submitForm()
});

function submitForm() {
    let cartStudentArr = []
    let firstNames = $(".form-main input[name='firstname[]']").map(function () { return $(this).val(); }).get();
    let lastNames = $(".form-main input[name='lastname[]']").map(function () { return $(this).val(); }).get();
    let dobs = $(".form-main input[name='dob[]']").map(function () { return $(this).val(); }).get();
    let classId = $("#hidClassId").val()

    let cartStudents = sessionStorage.getItem("cartStudents");
    if (cartStudents) {
        cartStudentArr = JSON.parse(cartStudents);
    }
    if (!firstNames.length > 0) {
        return false
    }
    for (let i = 0; i < firstNames.length; i++) {
        const studentObj = {
            uniqueId: new Date().getTime(),
            firstName: firstNames[i],
            lastName: lastNames[i],
            dateOfBirth: dobs[i],
            classIds: [classId]
        }
        cartStudentArr.push(studentObj)
    }
    sessionStorage.setItem("cartStudents", JSON.stringify(cartStudentArr));
    $('#studentModal').modal('hide');
    getCartCount()
    location.reload();
}

function removeFromCart(uniqueId) {
    let cartStudentArr = []
    let cartStudents = sessionStorage.getItem("cartStudents");
    if (cartStudents) {
        cartStudentArr = JSON.parse(cartStudents);
        cartStudentArr = removeObjectById(cartStudentArr, uniqueId)

        // remove from html list
        $("#" + uniqueId).remove()
    }
    if (cartStudentArr.length > 0) {
        sessionStorage.setItem("cartStudents", JSON.stringify(cartStudentArr));
    } else {
        sessionStorage.removeItem("cartStudents")
    }
    getCartData()
    getCartCount()

    const tbody = $("#alreadyAddedShowStudentTable tbody");
    const alreadyAddedTbody = $("#alreadyAddedStudentTable tbody");

    if (tbody.children().length == 0) {
        $('#showStudentModal').modal('hide');
    }
    if (alreadyAddedTbody && alreadyAddedTbody.children().length == 0) {
        $("#alreadyAddedStudentDiv").css("display", "none")
    }
}

function removeObjectById(arr, uniqueId) {
    const objWithIdIndex = arr.findIndex((obj) => obj.uniqueId === uniqueId);

    if (objWithIdIndex > -1) {
        arr.splice(objWithIdIndex, 1);
    }

    return arr;
}

function removeFromCartByClassId(classId) {
    let cartStudentArr = []
    let cartStudents = sessionStorage.getItem("cartStudents");
    if (cartStudents) {
        cartStudentArr = JSON.parse(cartStudents);

        const cartStudentFiltered = cartStudentArr.filter(x => x.classIds[0] === classId.toString())

        console.log("cartStudentFiltered:::", cartStudentFiltered)
        if (cartStudentFiltered) {
            if (cartStudentFiltered.length === 1) {
                // direct delete
                removeFromCart(cartStudentFiltered[0].uniqueId)
            } else {
                // open popup to delete student from cart
                openShowStudentModal(classId)
            }
        }
    }
}

function openShowStudentModal(classId) {
    let cartStudents = sessionStorage.getItem("cartStudents");
    if (cartStudents) {
        cartStudents = JSON.parse(cartStudents);
        if (cartStudents.length > 0) {
            const filteredArr = cartStudents.filter(x => x.classIds[0] === classId.toString())
            $('#alreadyAddedShowStudentTable tbody').empty()
            $.each(filteredArr, function (i, element) {
                $('#alreadyAddedShowStudentTable tbody').append("<tr id=" + element.uniqueId + ">\
                    <td>"+ element.firstName + "</td>\
                    <td>"+ element.lastName + "</td>\
                    <td>"+ element.dateOfBirth + "</td>\
                    <td><button type='button' class='btn' onclick='removeFromCart("+ element.uniqueId + ")'>Remove</button></td>\
                </tr>");
            });
        }
    }
    $('#showStudentModal').modal('show');
}

function displayStudentsByClassId(classId) {
    let cartStudents = sessionStorage.getItem("cartStudents");
    if (cartStudents) {
        cartStudents = JSON.parse(cartStudents);
        if (cartStudents.length > 0) {
            const filteredArr = cartStudents.filter(x => x.classIds[0] === classId.toString())
            $('#displayStudentTable tbody').empty()
            $.each(filteredArr, function (i, element) {
                $('#displayStudentTable tbody').append("<tr id=" + element.uniqueId + ">\
                    <td>"+ element.firstName + "</td>\
                    <td>"+ element.lastName + "</td>\
                    <td>"+ element.dateOfBirth + "</td>\
                </tr>");
            });
        }
    }
    $('#displayStudentModal').modal('show');
}

function submitCart() {
    window.location = './login.php'
}

function redirectToregistration() {
    window.location = './registration-detail.php'
}

function couponCodeAdd() {
    const couponCode = $("#couponCode").val().trim()
    if(couponCode != "") {
        getCartData(couponCode)
    }
}

function couponCodeRemove() {
    getCartData()
}