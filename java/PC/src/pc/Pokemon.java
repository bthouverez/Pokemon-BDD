/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pc;

/**
 *
 * @author thouverez
 */
public class Pokemon {
    private int id;
    private String nom;
    private int lvl;
    
    public Pokemon() {
        this.nom = "";
        this.lvl = -1;
        this.id = -1;
    }
    public Pokemon(String n, int l) {
        this.nom = n;
        this.lvl = l;
    }
    
    public Pokemon(int i, String n, int l) {
        this.id = i;
        this.nom = n;
        this.lvl = l;
    }

    @Override
    public String toString() {
        return  nom + " (lvl " + lvl + ")";
    }

    public int getId() {
        return id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public int getLvl() {
        return lvl;
    }

    public void setLvl(int lvl) {
        this.lvl = lvl;
    }
}
