<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .breadcrumb__section {
            background-color: #f5f5f5;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        .breadcrumb__content {
            text-align: center;
        }

        .section--padding {
            padding: 40px 0;
        }

        .form-control.m-0 {
            width: 100%;
            padding: 10px;
            margin: 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            height: 32px !important;
        }

        .form-check-inline {
            display: inline-block;
        }

        .form-check-label {
            margin-right: 15px;
        }

        .table thead th,
        .table tbody td {
            text-align: center;
        }

        .container-width {
            width: 959px;
        }
    </style>
</head>

<body>
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section">
        <div class="container">
            <div class="breadcrumb__content">
                <h4>Inquiry Form</h4>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start form section -->
    <div class="container container-width">
        <form method="post" action="{{ route('inquiries.store') }}" class="md-float-material form-material">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="name" name="name" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="date">Date:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="date" name="date" type="date">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="mileage">Mileage:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="mileage" name="mileage" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="vehicle">Vehicle:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="vehicle" name="vehicle" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="year">Year:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="year" name="year" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="lic_no">Lic No:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="lic_no" name="lic_no" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label" for="address">Address:</label>
                        <div class="col-sm-11">
                            <input class="form-control m-0" id="address" name="address" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="returning">Returning:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="returning" name="returning" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="color">Color:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="color" name="color" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="tel_digicel">TEL Digicel:</label>
                        <div class="col-sm-8">
                            <input class="form-control m-0" id="tel_digicel" name="tel_digicel" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="email" name="email" type="email">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="tel_lime">TEL Lime:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="tel_lime" name="tel_lime" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="dob">Date of Birth:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="dob" name="dob" type="date">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="chassis">Chassis:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="chassis" name="chassis" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p>Kindly complete this checklist by placing a tick in the respective boxes.<br>
                        Any discrepancies should be detailed in the section provided at the bottom of the sheet.</p>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="engine">Engine:</label>
                        <div class="col-sm-9">
                            <input class="form-control m-0" id="engine" name="engine" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p>ITEMS TO BE CHECKED:</p>
                    <p>Start Engine check dashboard for the following indicators</p>
                    <ul>
                        <li>Fuel level</li>
                        <li>Oil level</li>
                        <li>Coolant level</li>
                        <li>Power steering oil level</li>
                        <li>Check tires for wear and pressure (20% 30% 50% 60% 80% 100% other indicate)</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Engine Light</th>
                                <th>ABS Light</th>
                                <th>Brake Light</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>E 1/4</td>
                                <td>1/2 3/4</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>E 1/4</td>
                                <td>1/2 3/4</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>E 1/4</td>
                                <td>1/2 3/4</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>E 1/4</td>
                                <td>1/2 3/4</td>
                                <td>F</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <span class="col-sm-6"> </span><span class="col-sm-2">Good</span><span
                        class="col-sm-2">Defective</span>
                </div>
                <div class="col-md-6">
                    <span class="col-sm-6"> </span><span class="col-sm-2">Good</span><span
                        class="col-sm-2">Defective</span>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6 form-group">
                    @php $types1 = ['Horn', 'Carpet', 'Battery', 'Battery Clamps', 'Left Headlight', 'Right Headlight', 'Left Indicator', 'Right Front Fender', 'Left Front Fender', 'Right Front Door', 'Left Front Door', 'Left Rear Door', 'Right Rear Door', 'Left Tail Lamp', 'Right Tail Lamp', 'Hub Caps', 'Cigarette Lighter', 'Grill']; @endphp
                    @foreach ($types1 as $type)
                        <label class="col-sm-6">{{ $type }}</label>
                        <div class="form-check form-check-inline col-sm-2">
                            <label class="form-check-label">
                                <input class="form-check-input status-checkbox" type="checkbox"
                                    id="{{ strtolower(str_replace(' ', '_', $type)) }}_status[]" name="condition[{{ strtolower(str_replace(' ', '_', $type)) }}][]" value="good">
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-sm-2">
                            <label class="form-check-label">
                                <input class="form-check-input status-checkbox" type="checkbox"
                                    id="{{ strtolower(str_replace(' ', '_', $type)) }}_status[]" name="condition[{{ strtolower(str_replace(' ', '_', $type)) }}][]" value="defective">
                            </label>
                        </div><br>
                    @endforeach
                </div>
                <div class="col-md-6 form-group">
                    @php $types2 = ['Reverse Light', 'Rear Door or Trunk', 'Window Functions', 'Oil Cap', 'Left Quarter Panel', 'Right Quarter Panel', 'Front Bumper', 'Rear Bumper', 'Left Wing Mirror', 'Right Wing Mirror', 'Rims', 'Interior Lights', 'Seats', 'Door Pulls', 'Rear Windshield', 'Front Windshield', 'Spare Tire', 'Jack & Handle', 'Wipers & Washer Jets']; @endphp
                    @foreach ($types2 as $key => $type)
                        <label class="col-sm-6">{{ $type }}</label>
                        <div class="form-check form-check-inline col-sm-2">
                            <label class="form-check-label">
                                <input class="form-check-input status-checkbox" type="checkbox"
                                    id="{{ strtolower(str_replace(' ', '_', $type)) }}_status[]" name="condition[{{ strtolower(str_replace(' ', '_', $type)) }}][]" value="good">
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-sm-2">
                            <label class="form-check-label">
                                <input class="form-check-input status-checkbox" type="checkbox"
                                    id="{{ strtolower(str_replace(' ', '_', $type)) }}_status[]" name="condition[{{ strtolower(str_replace(' ', '_', $type)) }}][]" value="defective">
                            </label>
                        </div><br>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Following discrepancies were noted: .......................................................</p>
                    <p>I hereby authorize Superior Parts Limited to effect repairs and supply necessary materials
                        relating to this job and grant your employees permission to operate the vehicle described above
                        on streets, highways, and elsewhere for testing and inspection.</p>
                    <p>50% deposit is to be made on all jobs.</p>
                    <p>Superior Parts Ltd will not be held responsible for jobs left over 30 days.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="date">Date:</label>
                        <div class="col-sm-10">
                            <input class="form-control m-0" id="date" name="sign_date" type="date">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="signature">Customer's Signature:</label>
                        <div class="col-sm-8">
                            <input class="form-control m-0" id="signature" name="signature" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <button class="account__login--btn primary__btn mb-10" type="submit">Submit & Register</button>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('.status-checkbox').change(function() {
                var type = $(this).attr('id');
                $('.status-checkbox[id="' + type + '"]').not(this).prop('checked', false);
            });
        });
    </script>
</body>

</html>
