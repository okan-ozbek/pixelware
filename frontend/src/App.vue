<template>
    <div>
        <navigation-menu />
        <header-hero />

        <MainContentContainer>
            <main-content
                id="tjip"
                logo-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR6ujJDazpqUHgLkDkdjCczrkYY0bOe746wQ&s"
            >
                <template #imagery>
                    <div class="rectangle"></div>
                </template>
                <template #intro>
                    TJIP is een Nederlands technologiebedrijf dat digitale platformen ontwikkelt voor sectoren zoals financiële diensten, gezondheidszorg, en vastgoed.
                    Hun oplossingen helpen organisaties complexe processen te digitaliseren, bijvoorbeeld bij hypotheekaanvragen en verzekeringen.
                    TJIP werkt samen met klanten zoals ABN AMRO, Rabobank, en Aegon om data-analyse, klantinteractie en automatisering te verbeteren, waardoor bedrijfsprocessen efficiënter en klantgerichter worden.
                </template>
                <template #expertise-paragraph>
                    Gedurende mijn tijd binnen TJIP heb ik het volgende kunnen betekenen binnen in het PHP development team.
                </template>
                <template #list>
                    <li>Gehalveerde laadtijden voor de klant door Inertia in de frontend te implementeren.</li>
                    <li>Verving een meer dan 10 jaar oude Excel door de data en berekeningen te integreren in de codebase.</li>
                    <li>Implementeert een efficiënt auditsysteem met event sourcing, dat nu herbruikbaar is voor verschillende rollen en projecten.</li>
                    <li>Herschreef legacy code volgens moderne codering normen.</li>
                    <li>Ontwierp het officiële team Bever logo.</li>
                </template>
            </main-content>
            <main-content
                id="alflex"
                logo-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR6ujJDazpqUHgLkDkdjCczrkYY0bOe746wQ&s"
            >
                <template #imagery>
                    <div class="rectangle"></div>
                </template>
                <template #intro>
                    Alflex Technologies is een Nederlands bedrijf dat gespecialiseerd is in industriële automatisering en innovatieve oplossingen voor productieprocessen.
                    Ze leveren op maat gemaakte hardware- en softwareoplossingen voor verschillende sectoren, zoals de voedingsmiddelenindustrie, farmacie en machinebouw.
                    Hun technologie helpt bedrijven om productie-efficiëntie te verbeteren, processen te automatiseren en kosten te verlagen.
                </template>
                <template #expertise-paragraph>
                    Mijn focus binnen het team lag vooral aan het aanpassen van bestaande processen maar ook het toevoegen van nieuwe functionaliteiten.
                </template>
                <template #list>
                    <li>Optimaliseerde de meerdaagse workflow van de CFO tot een dagwerk door een geautomatiseerde webapplicatie te maken die alle gewerkte uren uit ClickUp ophaalt.</li>
                    <li>Verminderde query uitvoertijden van een half uur naar minder dan een minuut door een enorme database te splitsen en te indexeren met MSSQL.</li>
                    <li>Herdeelde diverse Laravel-projecten om compatibel te zijn met DDD-principes.</li>
                    <li>PDF-generator gemaakt om metingen te automatiseren volgens overheids inspectienormen.</li>
                </template>
            </main-content>
            <main-content
                id="pro-digitaal"
                logo-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR6ujJDazpqUHgLkDkdjCczrkYY0bOe746wQ&s"
                :has-expertise-paragraph="false"
                :has-list="false"
            >
                <template #imagery>
                    <div class="rectangle"></div>
                </template>
                <template #intro>
                    Ontwikkelde een algoritme voor een online vacaturebord dat de productiviteit van de arbeidskracht verhoogde door kandidaten te matchen met banen op basis van diverse criteria.
                </template>
            </main-content>
        </MainContentContainer>

        <contact-me />
    </div>
</template>
<script setup lang="ts">

import NavigationMenu from "@/components/NavigationMenu.vue";
import HeaderHero from "@/components/HeaderHero.vue";
import MainContentContainer from "@/components/MainContentContainer.vue";
import MainContent from "@/components/MainContent.vue";
import ContactMe from "@/components/ContactMe.vue";
</script>
<style scoped>
    /*
     * Tjip
     */
    #tjip .rectangle {
        width: 800px;
        height: 800px;
        margin-top: 4rem;
        background: linear-gradient(45deg, #B7FFB0, #F8D0F4);
    }

    /*
     * Alflex
     */
    #alflex .rectangle {
        width: 800px;
        height: 800px;
        margin-top: 4rem;
        background: linear-gradient(135deg, #FFF8D1, #BDF3A3);
    }

    /*
     * Pro-digitaal
     */
    #pro-digitaal .rectangle {
        width: 800px;
        height: 800px;
        margin-top: 4rem;
        background: linear-gradient(45deg, #C98BDF, #D1F4FF);
    }
</style>
