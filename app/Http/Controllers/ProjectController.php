<?php

namespace App\Http\Controllers;


use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add()
    {
        $project = new Projects();

        $project->naam = "Nieuwbouw Amsterdam";
        $project->beschrijving = "Waar ooit de parkeergarage van de voormalige Bijlmerbajes stond, zorgde een team van BMV voor de realisatie van nieuwbouw van de Spinoza20First-school en Sporthal Bajeskwartier, met daaraan gekoppeld een jongerencentrum. Deze middelbare school biedt plek aan 1.000 tot 1.200 leerlingen. De sporthal bestaat uit drie zalen. Deze worden op doordeweekse dagen overdag gebruikt door Spinoza20First en in de avonden en weekenden door verenigingen. Bij de ontwikkeling van de school en de sporthal besteedde BMV veel aandacht aan duurzaamheid. Zo is het gebouw flexibel indeelbaar, heeft het een lichte constructie en is bij de bouw gebruik gemaakt van duurzame materialen. Verder is het gebouw aangesloten op de warmte/koude-opslaginstallatie (voor verwarming in de winter en verkoeling in de zomer) van het gebied Bajeskwartier. Het dak van de school – met daarop het schoolplein – bevat veel groen, dat bijdraagt aan het vasthouden van regenwater. Op het dak van de sporthal bevinden zich hiernaast zonnepanelen. www.spinoza20first.nl Ontwerp: BDG Architecten";
        $project->image = "/resources/images/foto4";
        $project->actief = false;
        $project->save();
    }

    public function index()
    {
        $projects =  Projects::all();

        return view('projects', ['projects' => $projects]);
    }

    public function show(Projects $project)
    {
        return view('sow', ['project'=>$project]);
    }
}
