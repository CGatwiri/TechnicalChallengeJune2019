#include <iostream>

//Stream class to both read and write from/to files.
#include <fstream>
#include <unistd.h>


using namespace std;

int main() 
{
	//this defines the character we are searching for
	char mycharacter = {'a'};
	
	//this is an array that stores the names of the files we plan to search in
	string filename[5]= {"example1.txt","example2.txt","example3.txt"};
	
	//stream class to allow reading from files
	ifstream myfile;
	
	
	//this function will loop through all the documents looking for the specified character in all the files and prints the filename that has the character
	for(int i=0; i<1; i++)
	{
		cout << "Checking from :" << filename[i] << endl;
		usleep(9000);
		
		//this opens the specified file
		myfile.open("example1.txt");
		
//		if (!filename[i])
//   		{
//    	  	cout << "The input file could not be opened.";
//    	  	return 1;
//  		}
	
		//if the character is found, the name of the file is printed
		if(myfile.get(mycharacter) = true)
		{
			cout << "example1.txt" << endl;
		}
	}
	
}
