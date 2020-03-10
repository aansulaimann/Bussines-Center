<section class="login">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?= BASEURL; ?>/Home/">
                        <div class="input-group mb-3">
                        <input type="text" name="username">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="Admin" name="username">Admin</option>
                                    <option value="staff" name="username">Staff</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">Submit</button>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
