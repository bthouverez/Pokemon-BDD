package bthouverez.fr;

public class Voiture extends Vehicule {
    private int nbPortes;

    public Voiture() {
        System.out.println("Construction Voiture");
        this.nbPortes = 5;
    }

    public Voiture(int n) {
        System.out.println("Construction parametree Voiture");
        this.nbPortes = 5;
    }

    @Override
    public String toString() {
        return "\nVoiture{" +
                "nbPortes=" + nbPortes +
                '}';
    }
}
