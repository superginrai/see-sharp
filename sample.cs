using System;
using System.Collections.Generic;
using System.Text;


    public class Program
    {
        static public void Main()
        {
        Console.Write("File name:");
        var fileName = Console.ReadLine();
        Console.Write("Exit Path:");
        var exitPath = Console.ReadLine();

        string JPGStart = "0xFFD8";
        string PDFStart = "0x25504446";

            if (fileName.StartsWith(JPGStart)){
             var outputFile = $"{exitPath}.jpg";
                Console.WriteLine(outputFile);
         }
            else if (fileName.StartsWith(PDFStart)){
                var outputFile = $"{exitPath}.pdf";
                 Console.WriteLine(outputFile);
            }
            else {
                Console.WriteLine("Unknown File Type");
            }
        }
    }