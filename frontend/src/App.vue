<template>
    <div>
        <nav>
            <p>Pixelware<span>.</span></p>
            <ul>
                <li> About me </li>
                <li> Experience </li>
                <li> Contact me </li>
            </ul>
        </nav>
        <header>
            <div class="header-text"> 
                <p>Full</p>
                <p>Stack</p>
                <p>Web</p>
                <p>Developer</p>
            </div>
            <div class="gradient"></div>
            <div class="picture"></div>
        </header>
        <main>
            <section id="tjip">
                <img alt="Tjip logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR6ujJDazpqUHgLkDkdjCczrkYY0bOe746wQ&s"/>
            </section>
            <section id="alflex">
                <img alt="Alflex logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR6ujJDazpqUHgLkDkdjCczrkYY0bOe746wQ&s"/>
            </section>
            <section id="pro-digitaal">
                <img alt="Pro-digitaal logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR6ujJDazpqUHgLkDkdjCczrkYY0bOe746wQ&s"/>
            </section>
        </main>
        <section id="contact-me">
            <form>
                <input type="text" name="full-name" placeholder="Okan Can Ozbek" />
                <input type="text" name="email" placeholder="o.ozbek@pixelware.nl" />
                <textarea name="wishes" placeholder="Describe your wishes.." />
                <input type="submit" name="submit" value="Send message" />
                <span> Send me anything! </span>
            </form>
        </section>
        <footer>
            <div> Website developed and created by Pixelware. All rights reserved (c) 2024. </div>    
        </footer>
    </div>
</template>
<script setup lang="ts">

</script>
<style scoped>
    /*
     * Navigation CSS styling
     */
    nav {
        display: flex;
        width: 100%;
        border-bottom: 1px solid #C7C7C7;
        padding: 1em 0;
    }

    nav p {
        width: 66%;
        padding-left: 3em;
    }

    nav p, nav span {
        font-weight: 900;
        font-size: 24px;
    }

    nav span {
        color: red;
    }

    nav ul {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        width: 33%;
    }

    nav ul li {
        list-style-type: none;
        cursor: pointer;
    }

    nav ul li {
        transition: 0.1s;
        letter-spacing: normal;
    }

    nav ul li:hover {
        transition: 0.2s;
        letter-spacing: 8px;
    }


    /*
     * Header CSS styling
     */
    .header-text {
        width: 60%;
        margin: 9% auto;
    }

    .header-text p {
        text-transform: uppercase;
        font-weight: bold;
        font-size: 128px;
    }

    header .gradient
    {
        position: absolute;
        top: 10em;
        left: 60em;
        z-index: -2;
        width: 764px;
        height: 764px;
        background: linear-gradient(135deg, #FFB0B0, #97F5EA);
    }

    header .picture
    {
        position: absolute;
        top: 25em;
        left: 72em;
        z-index: -1;
        width: 764px;
        height: 764px;
        background: url('https://pbs.twimg.com/media/FeufQ8OWYAAUBvs?format=jpg&name=large');
        background-size: cover;
    }

    /*
     * Main section styling
     */
    main {
        width: 60%;
        margin: 30em auto 0 auto;
    }

    main section {
        display: flex;
        width: 100%;
        justify-content: center;
        margin-bottom: 16rem;
    }

    /*
     * Footer CSS styling
     */

    
    #contact-me {
        padding: 9em;
        height: 80vh;
        background-color: black;
        color: white;
        display: flex;
    }

    #contact-me form {
        display: flex;
        flex-direction: column;
        justify-content: center;
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
