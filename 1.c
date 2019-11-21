# include<stdio.h>
void Ants_solution(int n, float w[], float v[], float c) {
   float x[20], tmp = 0;
   int i, j, p;p = c;
   for (i = 0; i < n; i++)
      x[i] = 0.0;
   for (i = 0; i < n; i++) {
      if (w[i] > p){
         break;}
      else {
         x[i] = 1.0;
         tmp = tmp + v[i];
         p = p - w[i];   } }
   if (i < n)
      x[i] = p / w[i];
   tmp = tmp + (x[i] * v[i]);
   printf("%.2f", tmp);}
int main() {
   float w[20], v[20], c;
   int n, i, j; float rat[20], tmp;
   scanf("%d", &n);
   for (i = 0; i < n; i++) {
      scanf("%f %f", &w[i], &v[i]);}
   scanf("%f", &c);
   for (i = 0; i < n; i++) {
      rat[i] = v[i] / w[i];}
   for (i = 0; i < n; i++) {
      for (j = i + 1; j < n; j++) {
         if (rat[i] < rat[j]) {
            tmp = rat[j]; rat[j] = rat[i];
            rat[i] = tmp;   tmp = w[j];
            w[j] = w[i];
            w[i] = tmp;
            tmp = v[j];
            v[j] = v[i];
            v[i] = tmp;}  }  }
Ants_solution(n, w, v, c);
   return(0);}
