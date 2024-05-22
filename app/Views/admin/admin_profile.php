<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<style>
    @media (max-width:768px) {
        .profile_image {
            height: 70px;
            width: 70px;
            border-radius: 50%;
        }
        .margin_top {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .edit_btn {
            height: 35px;
            background-color: #63A238;
            width: 75px;
            color: white;
            border-radius: 5px;
        }
        .update_btn {
            height: 35px;
            background-color: blue;
            width: 75px;
            color: white;
            border-radius: 5px;
        }
    }

    @media (min-width:768px) {
        .profile_image {
            height: 150px;
            width: 150px;
            border-radius: 50%;
        }
        .margin_top {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .edit_btn {
            height: 50px;
            background-color: #63A238;
            width: 90px;
            color: white;
            border-radius: 5px;
        }
        .update_btn {
            height: 35px;
            background-color: blue;
            width: 75px;
            color: white;
            border-radius: 5px;
        }
    }

    .only_for_name {
        margin-bottom: 50px;
    }
</style>

<section>
    <div class="container margin_top">
        <div class="row">
            <div class="col-6 only_for_name">
                <div class="row">
                    <div class="col-5 col-md-5 col-lg-4">
                        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/images.png" alt="logo" class="profile_image"></a>
                    </div>
                    <div class="col-7 col-md-7 col-lg-8">
                        <p><?= session('username') ?></p>
                        <p>ExamExampleple@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-6 only_for_name d-flex flex-row justify-content-end">
                <div class="row">
                    <button class="text-center edit_btn" onclick="enableFields()">Edit</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <label>First Name</label>
                <input name="name" type="text" placeholder="First Name" class="form-control my-2" value="<?= session('username') ?>" disabled>
            </div>
            <div class="col-12 col-md-6">
                <label>Last Name</label>
                <input name="name" type="text" placeholder="Last Name" class="form-control my-2" disabled>
            </div>
            <div class="col-12 col-md-6">
                <label>Phone Number</label>
                <input name="phone" type="text" placeholder="Phone" class="form-control my-2" disabled>
            </div>
            <div class="col-12 col-md-6">
                <label>Email</label>
                <input name="email" type="email" placeholder="Email" class="form-control my-2" disabled>
            </div>
            <div class="col-12 col-md-6">
                <label>Password</label>
                <input name="password" type="password" placeholder="Password" class="form-control my-2" disabled>
            </div>
            <div class="col-12 col-md-6">
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="4" class="form-control my-2" disabled></textarea>
            </div>
        </div>
    </div>
    <div class="text-center mb-55">
        <button class="update_btn">Update</button>
    </div>
</section>

<script>
function enableFields() {
    var inputs = document.querySelectorAll('input, textarea');
    inputs.forEach(function(input) {
        input.removeAttribute('disabled');
    });
}
</script>

<?= $this->endSection() ?>
