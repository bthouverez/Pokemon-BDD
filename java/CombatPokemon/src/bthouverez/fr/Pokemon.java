package bthouverez.fr;

import java.util.ArrayList;
import java.util.Random;

public class Pokemon {
    private int id;
    private String nom;
    private int pointsDeVie;
    private int niveau;
    private ArrayList<Attaque> attaques;
    // Ajouter une méthode pour ajouter une attaque au pokemon

    public Pokemon() {
        this.id = -1;
        this.nom = "unnamed";
        this.niveau = -1;
        this.pointsDeVie = 0;
        this.attaques = new ArrayList<>();
    }

    public Pokemon(int i, String no, int ni, int p) {
        this.id = i;
        this.nom = no;
        this.niveau = ni;
        this.pointsDeVie = p;
        this.attaques = new ArrayList<>();
    }
    public Pokemon(int i, String no) {
        this.id = i;
        this.nom = no;
        this.niveau = 0;
        this.pointsDeVie = 10;
        this.attaques = new ArrayList<>();
    }
    public int getId() {
        return this.id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return this.nom;
    }

    public void setNom(String n) {
        this.nom = n;
    }

    public int getNiveau() {
        return this.niveau;
    }

    public void setNiveau(int n) {
        this.niveau = n;
    }

    public int getPointsDeVie() {
        return pointsDeVie;
    }

    public void setPointsDeVie(int pointsDeVie) {
        this.pointsDeVie = pointsDeVie;
    }

    @Override
    public String toString() {
        String res = this.nom + " : niv."+this.niveau+", "+this.pointsDeVie+"pv restants";
        if(this.attaques.size() != 0){
            res += " et il a les attaques :";
            for(Attaque at : this.attaques) {
                res += " " + at.getNom();
            }
        }  else {
            res += " mais il n'a pas d'attaques....";
        }
        return res;
    }

    public void crier() {
        String[] sentences = {"YOYOOYOY me llamo ###", "BWABWABWA, je suis ###, crains ma fureur !", "Coucou, moi c'est ###!", "*** ### miaule ***"};
        Random r = new Random();
        String s = sentences[r.nextInt(sentences.length)];
        s = s.replaceFirst("###", this.nom);
        System.out.println(s);
    }

    public void addAttaque(Attaque a) {
        this.attaques.add(a);
    }

    public void taperFortSur(Pokemon p, int n) {
        System.out.println(this.getNom() + " lance " + this.attaques.get(n).getNom());
        p.setPointsDeVie(p.getPointsDeVie() - this.attaques.get(n).getDegats());
    }

}
