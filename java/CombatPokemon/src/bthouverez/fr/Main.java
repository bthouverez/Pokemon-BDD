package bthouverez.fr;

import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    /**
     * TODO
     * <p>
     * Revoir base, les pokemons ne désignent pas tous ceux du jeu (donc pas de niveau, pas de vie normalement...)
     * Code de base d'une requete SQL avec récupération du résultat
     * Classe DB manager avec les attributs qui vont bien
     * <p>
     * Coder getAllPokemons, getPokemonById
     * Intégrer Dresseur
     * Coder getAllPokemonDetenus(Dresseur)
     */

    public static void main(String[] args) throws SQLException {

        /*
        p.crier();
        Pokemon p2 = new Pokemon(151, "Mew", 12, 131);
        p.crier();
      Pokemon p = new Pokemon(6, "Tortank", 55, 300);
        Attaque a0 = new Attaque(23, "Hydrocanon", 50);
        Attaque a1 = new Attaque(65, "Pistolet à O", 5);
        Attaque a2 = new Attaque(44, "Surf", 150);
        p.addAttaque(a0);
        p.addAttaque(a1);
        p.addAttaque(a2);
        Pokemon d = new Pokemon(9, "Dracaufeu", 47, 250);
        a0 = new Attaque(83, "Lance-flamme", 150);
        a1 = new Attaque(14, "Griffe", 5);
        a2 = new Attaque(49, "Flammeche", 50);
        d.addAttaque(a0);
        d.addAttaque(a1);
        d.addAttaque(a2);


        System.out.println(p);
        System.out.println(d);
        p.taperFortSur(d, 2);
        System.out.println(d);
        */
        DBManager db = new DBManager();
        /*for(Pokemon p: db.getAllPokemons()) {
            System.out.println(p.getId() + " : " + p.getNom());
        }*/

        // 1 - Méthode getAllPokemons()
        // 2 - Méthode getPokemonById(int id)
        //Pokemon pikachu = db.getPokemonById(25);
        //System.out.println(pikachu);

        System.out.println("Dresseur, quel est ton nom ?");
        Scanner sc = new Scanner(System.in);
        String n = sc.nextLine();

        Dresseur d = db.getDresseurByName(n);
        System.out.println("Voici tes pokémons "+n);

        ArrayList<Pokemon> tab = db.getPokemonsDetenus(d);
        for (Pokemon p : tab) {
            System.out.println(p.getNom() + " lvl "+ p.getNiveau());
        }
    }
}
