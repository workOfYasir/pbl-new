#include <iostream>
#include <cmath>
 
using namespace std;
 
//The structure that holds the complex number
struct ComplexNumber
{
double real1 , real2 ,
  img1 , img2 ;
};
 
//the addition function
void addition( ComplexNumber &cn )
{
cout<<“\nThe sum of the two complex numbers: \n”
   << ” (” << cn.real1 << “+” << cn.img1 << “i) + (” << cn.real2 << “+” << cn.img2 << “i) ”
 
    << “= ” << cn.real1+cn.real2 << “+” << cn.img1 + cn.img2 << “i” ;
}
 
//the subtraction function
void subtraction( ComplexNumber &cn )
{
cout<<“\n\nThe subtraction of the two complex numbers: \n”
  << ” (” << cn.real1 << “+” << cn.img1 << “i) – (” << cn.real2 << “+” << cn.img2 << “i) ” ;
 
if( cn.img1 – cn.img2 < 0 )
{
  cout<<“= ” << cn.real1-cn.real2 << “+(” << cn.img1 – cn.img2 << “)i” ;
}
else
  cout << “= ” << cn.real1-cn.real2 << “+” << cn.img1 – cn.img2 << “i” ;
}
 
//the multiplication
void multiplication( ComplexNumber &cn )
{
cout<<“\n\nThe product of the two complex numbers: \n”
  << ” (” << cn.real1 << “+” << cn.img1 << “i) * (” << cn.real2 << “+” << cn.img2 << “i) ”
 
  << “= ” << (cn.real1*cn.real2)- (cn.img1*cn.img2) << “+” << (cn.img1*cn.real2) + (cn.img2*cn.real1) << “i” ;
}
 
//the division function
void division( ComplexNumber &cn )
{
cout<<“\n\nThe division of the two complex numbers: \n”
  << ” (” << cn.real1 << “+” << cn.img1 << “i) / (” << cn.real2 << “+” << cn.img2 << “i) ”
 
  << “= (” << (cn.real1*cn.real2)+(cn.img1*cn.img2) << “/” << pow(cn.real2,2) + pow(cn.img2,2)
 
  << “)+(” << (cn.img1*cn.real2) – (cn.img2*cn.real1) << “/” << pow(cn.real2,2) + pow(cn.img2,2) << “)i” ;///sqrt() function included in <cmath> library
}
 
//the main() function
int main( )
{
ComplexNumber cn ;
 
cout<<“Enter the real and imaginary value of the first complex number\n” ;
cin >> cn.real1 >> cn.img1 ;
cin.ignore( ) ;
 
cout<<“\nEnter the real and imaginary value of the second complex number\n” ;
cin>> cn.real2 >> cn.img2 ;
cin.ignore( ) ;
 
addition(cn) ; //perform addition
subtraction(cn) ; //perform subtraction
multiplication(cn) ; //perform multiplication
division( cn ) ; //perform division
 
cin.get( ) ;
return 0 ;
}
