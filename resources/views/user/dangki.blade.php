<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>
    Register Form
</h3>

<div>
    <form action="/user/dang-ki" method="post">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" id="Fullname" name="Fullname" placeholder="Your name..">

        <label for="Email   ">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="Phone">Phone</label>
        <input type="text" id="Phone" name="email" placeholder="Your last Phone..">
        <label for="lname">Address</label>
        <input type="text" id="Address" name="email" placeholder="Your Address..">
        <label for="Identity Card">Identity Card</label>
        <input type="text" id="Identity Card" name="email" placeholder="Your Identity Card..">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
