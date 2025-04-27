<style>
.wrapper {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.container {
    height: 70%;
    display: flex;
    flex-wrap: nowrap;
    justify-content: start;
    overflow: hidden;
}

.card {
    width: 80px;
    border-radius: .75rem;
    background-size: cover;
    cursor: pointer;
    overflow: hidden;
    border-radius: 2rem;
    margin: 0 10px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    transition: .6s cubic-bezier(.28,-0.03,0,.99);
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.card-video {
    position: relative;
    height: 100%;
    width: 100%;
}

.card > .row {
    color: white;
    display: flex;
    flex-wrap: nowrap;
}

.card > .row > .icon {
    background: #223;
    color: white;
    border-radius: 50%;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 15px;
}

.card > .row > .description {
    display: flex;
    justify-content: center;
    flex-direction: column;
    overflow: hidden;
    height: 80px;
    width: 540px;
    opacity: 0;
    transform: translateY(30px);
    transition-delay: .3s;
    transition: all .3s ease;
}

.description p {
    color: #b0b0ba;
    font-size: medium;
    padding-top: 5px;
    
}

.description h4 {
    font-size: medium;
    color: #000;
    text-transform: uppercase;
}

.card-video {
    opacity: 0;
    z-index: -1;
    display: none;
}

input {
    display: none;
}

input:checked + label .card-video {
    opacity: 1;
    z-index: 10;
    display: block;
}

input:checked + label {
    width: 800px;
}

input:checked + label .description {
    opacity: 1 !important;
    transform: translateY(0) !important;
}

@media (max-width: 768px) {
    .container {
        height: 100%;
        width: 80%;
        flex-direction: column;
    }   
    .card {
        margin: 0;
    }
    input:checked + label {
        width: 100% !important;
    }
}
</style>
