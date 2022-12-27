/* the program is just for edjucational purpose,
made by Om Patel for teaching narrow ai Technology to others
Subscribe:- Junior Ultimate and Follow on insta @iampatelom
 */

import java.util.Scanner;
//main class
class Prime
{
    public static void main(String args[])
    {
        Scanner sc = new Scanner(System.in);

        String que,fin;
        int i=0;

        while(i<15) {
            System.out.println("Enter Question");
            //taking input
            que = sc.nextLine();
            //converting to lower case
            fin = que.toLowerCase();
            i++;
            switch (fin) {
                case "hi":
                    System.out.println("Hellow");
                    break;

                case "did you eat":
                    System.out.println("No I consume Electricity!!");
                    break;

                case "capital of maharashtra":
                    System.out.println("Mumbai");
                    break;

                case "who is shivaji mahraj":
                    System.out.println("Great leader");
                    break;

                case "capital of gujarat":
                    System.out.println("Gandhinagar");
                    break;

                case "who is maarana pratap":
                    System.out.println("Great leader");
                    break;

                case "capital of india":
                    System.out.println("Delhi ");
                    break;
            }
        }
    }
}
