<x-layout.app title="Contact Pagina">
    <h1 class="contact">Contact</h1>
    <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op
        info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>

    <form action="" method="get">
        <div class="form">
            <label for="name" class="name">Naam:</label>
            <input type="text" name="name" id="name" placeholder="Eg. Peter">
        </div>

        <div class="form">
            <label for="email" class="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="test@test.com">
        </div>

        <div class="form">
            <label for="onderwerp" class="onderwerp">Onderwerp:</label>
            <input type="text" name="onderwerp" id="onderwerp" placeholder="onderwerp">
        </div>

        <div class="form">
            <label for="text" class="text">Text:</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" name="Submit" id="Submit">
    </form>
</x-layout.app>
