<template>
    <header id="#header">
        <div class="header-text">
            <p>Full</p>
            <p>Stack</p>
            <p>Web</p>
            <p>Developer</p>
        </div>
        <div class="gradient"></div>
        <div class="picture"></div>
    </header>
</template>
<style>
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
</style>