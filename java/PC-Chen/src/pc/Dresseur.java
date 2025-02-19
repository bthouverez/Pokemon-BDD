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
class Dresseur {
    private int id;
    private String nom;
    
    public Dresseur(String n) {
        this.nom = n;
    }
    public Dresseur(int i, String n) {
        this.id = i;
        this.nom = n;
    }

    public int getId() {
        return this.id;
    }

    public String getNom() {
        return this.nom;
    }

    public void setNom(String nom_dress) {
        this.nom = nom_dress;
    }
}
