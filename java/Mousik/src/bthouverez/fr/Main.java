package bthouverez.fr;

import com.github.javafaker.Faker;

import java.io.IOException;
import java.util.Locale;

public class Main {

    public static void main(String[] args)  {
        MainWindow win = new MainWindow();
        /*
        Faker f = new Faker(new Locale("fr"));
        for (int ii = 0; ii < 10; ii++) {
            String n = f.lorem().sentence(2);
            String ar = f.name().name();
            String al = f.lorem().sentence(1);
            int d = f.number().numberBetween(25, 360);
            String g = f.lorem().word();
            Chanson c = new Chanson(ii+1, n, ar, al, g, d);
            win.getPlaylist().add(c);
            System.out.println(c);
        }
        */

        Chanson c;
        c = new Chanson(1, "La fin de leur monde", "IAM", "Soldat de fortune", "Hip-Hop", 1234);
        win.getPlaylist().add(c);
        c = new Chanson(2, "ROCKADOWN", "Vanupié", "Inconnu", "Reggae", 3214);
        win.getPlaylist().add(c);
        c = new Chanson(3, "So A Child May Follow", "Damian Marley", "Stony Hill", "2017", 1155);
        win.getPlaylist().add(c);
        c = new Chanson(4, "The Big Tree", "Stand High Patrol", "Midnight Walkers", "Dub", 183);
        win.getPlaylist().add(c);
        c = new Chanson(5, "Liar", "Korn", "Untitled", "Metal", 183);
        win.getPlaylist().add(c);
        win.update();
        win.setVisible(true);
    }
}
