<!--=====================================-->
<!--=          Form Area Start         =-->
<!--=====================================-->
<div class="container-fluid">
    <!-- Riga per i bottoni -->
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-start">
            <button type="button" class="btn btn-secondary mr-2">Indietro</button>
            <button type="button" class="btn btn-primary mr-2">Salva</button>
            <button type="button" class="btn btn-warning mr-2">Modifica</button>
            <button type="button" class="btn btn-danger">Elimina</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card basic-form">
                <div class="card-body">
                    <h3 class="text-22 text-midnight text-bold mb-4">Bootstrap Form Validation</h3>
                    <form class="needs-validation" novalidate>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-label">
                                        <label>Name</label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
                                    <div class="invalid-feedback">
                                        Please choose a name.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-label">
                                        <label>Email or Username</label>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Enter your email address or username" name="email" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Phone</label>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter your Phone" name="phone" required>
                            <div class="invalid-feedback">
                                Please choose a Phone.
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Passcode</label>
                            </div>
                            <input type="password" class="form-control" placeholder="Enter your passcode" name="password" required>
                            <div class="invalid-feedback">
                                Please choose a password.
                            </div>
                        </div>
                        <!--
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" required>
                                <label class="form-check-label" for="check1">I agree to Dashy <a href="#">Privacy Policy</a> & <a href="#">Terms</a></label>
                                <div class="invalid-feedback">
                                    Please check.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn">REGISTER</button>
                        </div>
                        -->
                    </form>
                </div>
            </div>
        </div>
        <!--
        <div class="col-lg-6">
            <div class="card basic-form">
                <div class="card-body">
                    <h3 class="text-22 text-midnight text-bold mb-4">Validation Feedback</h3>
                    <form class="needs-validation" novalidate>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Name</label>
                            </div>
                            <input type="text" class="form-control is-valid" value="Dashy" name="name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Email or Username</label>
                            </div>
                            <input type="email" class="form-control is-valid" value="dashy@gmail.com" name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-label">
                                <label>Passcode</label>
                            </div>
                            <input type="password" class="form-control is-valid" value="passcode" name="password" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check2" required>
                                <label class="form-check-label" for="check2">I agree to Dashy <a href="#">Privacy Policy</a> & <a href="#">Terms</a></label>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card basic-form">
                <div class="card-body">
                    <h3 class="text-22 text-midnight text-bold mb-4">Select 2</h3>
                    <div class="form-group">
                        <select class="select2" data-placeholder="Select2 with Placeholder">
                            <option value="">Select2 with Placeholder</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="select2">
                            <option value="0">Select One</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="select2" multiple data-placeholder="Multiple Select2">
                            <option value="">Multiple Select2</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card basic-form">
                <div class="card-body">
                    <h3 class="text-22 text-midnight text-bold mb-4">Bootstrap Color Picker</h3>
                    <div class="form-group">
                        <div id="cp1" class="input-group" title="Using input value">
                            <input type="text" class="form-control" value="#DD0F20FF" />
                            <span class="input-group-append">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="cp2" class="input-group" title="Using input value" data-color="rgb(241, 138, 49)">
                            <input type="text" class="form-control" value="#DD0F20FF" />
                            <span class="input-group-append">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="cp3" class="input-group" title="Using input value" data-color="hsl(56, 93%, 63%)">
                            <input type="text" class="form-control" value="#DD0F20FF" />
                            <span class="input-group-append">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card basic-form">
                <div class="card-body">
                    <h3 class="text-22 text-midnight text-bold mb-4">Flatpickr Date</h3>
                    <div class="form-group flatpickr-datetime">
                        <input class="flatpickr-date form-control" type="text" placeholder="Select Date.." readonly="readonly">
                        <span class="datetime-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card basic-form">
                <div class="card-body">
                    <h3 class="text-22 text-midnight text-bold mb-4">Flatpickr Time</h3>
                    <div class="form-group flatpickr-datetime">
                        <input class="flatpickr-time form-control text-left" type="text" placeholder="Select Time.." readonly="readonly">
                        <span class="datetime-icon"><i class="far fa-clock"></i></span>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
    <!-- Riga per i bottoni -->
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-start">
            <button type="button" class="btn btn-secondary mr-2">Indietro</button>
            <button type="button" class="btn btn-primary mr-2">Salva</button>
            <button type="button" class="btn btn-warning mr-2">Modifica</button>
            <button type="button" class="btn btn-danger">Elimina</button>
        </div>
    </div>
</div>
