<template>
    <section id="contact-me">
        <form>
            <input type="text" name="full-name" placeholder="Okan Can Ozbek" />
            <input type="text" name="email" placeholder="o.ozbek@pixelware.nl" />
            <textarea name="wishes" placeholder="Describe your wishes.." />
            <input type="submit" name="submit" value="Send message" />
            <span> Send me anything! </span>
        </form>
        <div>
            <div class="arch">
                <p>LET'S<br>TALK<span>.</span></p>
            </div>
        </div>
    </section>
    <footer>
        <div> Website developed and created by Pixelware. All rights reserved (c) 2024. </div>
    </footer>
</template>
<style>
/*
 * Footer CSS styling
 */
#contact-me {
    padding: 9em;
    height: 70vh;
    background-color: black;
    color: white;
    display: flex;
    justify-content: space-around
}

#contact-me form {
    display: flex;
    flex-direction: column;
    width: 40%;
}

#contact-me * {
    margin-bottom: 2em;
}

#contact-me form input[type="text"] {
    font-size: 14px;
    padding: 2em;
    border-radius: 20px 20px 0 0;
    border: none;
    border-bottom: 1px solid #252525;
    background-color: #0A0A0A;
    color: #b8b8b8;
}

#contact-me form textarea {
    font-size: 14px;
    padding: 2em;
    border-radius: 20px 20px 0 0;
    border: none;
    border-bottom: 1px solid #252525;
    background-color: #0A0A0A;
    resize: vertical;
    width: max-content;
    width: 100% !important;
    height: 20vh !important;
    color: #b8b8b8;
}

#contact-me form input[type="submit"] {
    padding: 1.5em 0;
    border-radius: 50px;
    width: 20em;
    font-size: 16px;
    font-weight: 800;
    align-self: center;
    background: linear-gradient(135deg, #FCB0B0, #D2B7FD);
    border: none;
}

#contact-me form span {
    align-self: center;
    color: #252525
}

#contact-me form input[type="submit"] {
    transition: 3s;
    box-shadow: none;
}

#contact-me form input[type="submit"]:hover {
    transition: 0.7s;
    cursor: pointer;
    box-shadow: inset 0px 0px 40px #fff0f0;
    box-shadow: 0 0 50px rgba(255, 177, 177, 0.6);
}

#contact-me .arch
{
    width: 30rem;
    height: 40rem;
    border-radius: 500px 0 0 0;
    background: linear-gradient(-30deg, #719986, #DABCFF);
    margin-right: 8rem;
}

#contact-me .arch p
{
    position: relative;
    font-weight: bold;
    font-size: 128px;
    top: 25%;
    left: 18rem;
}

#contact-me .arch p span
{
    color: red;
}

footer {
    background-color: black;
    color: #414141;
    text-align: center;
}

footer div {
    width: 100%;
    padding: 2% 0;
    border-top: 1px solid #121212;
}
</style>