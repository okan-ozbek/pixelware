<template>
    <nav>
        <p>Pixelware<span>.</span></p>
        <ul>
            <li><a href="#header">Who am I?</a></li>
            <li><a href="#tjip">Expertise</a></li>
            <li><a href="#contact-me">Contact me</a></li>
        </ul>
    </nav>
</template>
<style>
/*
 * Navigation CSS styling
 */
nav {
    position: fixed;
    display: flex;
    width: 100%;
    border-bottom: 1px solid #C7C7C7;
    padding: 1em 0;
    background-color: white;
    top: 0;
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

nav ul li a
{
    text-decoration: none;
    color: black;
}
</style>