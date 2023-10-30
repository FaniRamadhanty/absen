<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">

<style>
    * {
    box-sizing: border-box;
    margin: 0;
}

body {
    background: #007a8d;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: "Montserrat", sans-serif;
    font-size: 10px;
    height: 90vh;
    margin: -20px 0 50px;
    padding: 10px;
}

.container {
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 522px;
    min-width: 370px;
}

.card-container {
    display: flex;
}

.left {
    flex: 1;
    height: 480px;
    background-color: #00b4cf;
}

.right {
    display: flex;
    flex: 1;
    height: 460px;
    background-color: #ffffff;
    justify-content: center;
    align-items: center;
}

.left {
    display: flex;
    flex: 1;
    height: 522px;
    justify-content: center;
    align-items: center;
    color: #ffffff;
}


.left-container {
    height: 50%;
    width: 80%;
    text-align: center;
    line-height: 22px
}

.left p {
    font-size: 0.9rem;
}

h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.right-container {
    width: 70%;
    height: 80%;
    text-align: center;
}

input,
textarea {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
    font-size: 0.8rem;
}

input:focus,
textarea:focus {
    outline: 1px solid #00b4cf;
}

button {
    border-radius: 20px;
    border: 1px solid #00b4cf;
    background-color: #00b4cf;
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-out;
    cursor: pointer;
}

button:hover {
    opacity: 0.7;
}

textarea {
    height: 90px;
}
/* responsive */

@media only screen and (max-width: 600px){
    .left {
        display: none;
    }

    .lg-view {
        display: none;
    }
}

@media only screen and (min-width: 600px) {
    .sm-view {
        display: none;
    }
}

</style>

</head>

<body>
    <div class="container">

        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h2>Tentang Kami</h2>
                    <p>Mandan Koding adalah channel berbagi tutorial seputar pemograman.</p>
                    <br>
                    <p>Bantu kami dengan men Subscribe, Like dan Share</p>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <form action="">
                        <h2 class="lg-view">Hubungi Kami</h2>
                        <h2 class="sm-view">Hubungi Kami</h2>
                        <input type="text" placeholder="Nama">
                        <input type="email" placeholder="Alamat Email">
                        <input type="text" placeholder="Perusahaan" autocomplete="off">
                        <input type="phone" placeholder="Telepone" autocomplete="off">
                        <textarea rows="10" placeholder="Pesan"></textarea>
                        <button>Kirim</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>