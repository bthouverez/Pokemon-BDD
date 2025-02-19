package bthouverez.fr;

import java.util.ArrayList;

public class Dresseur {
    private int id;
    private String nom;
    private ArrayList<Pokemon> pokemons;

    public Dresseur() {
        this.id = -1;
        this.nom = "Unknown";
        this.pokemons = new ArrayList<>();
    }

    public Dresseur(int i, String n) {
        this.id = i;
        this.nom = n;
        this.pokemons = new ArrayList<>();
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public ArrayList<Pokemon> getPokemons() {
        return pokemons;
    }

    public boolean addPokemon(Pokemon p) {
        if(this.pokemons.size() < 6) {
            this.pokemons.add(p);
            return true;
        }
        return false;
    }

}
