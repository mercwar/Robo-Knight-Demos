#ifndef PAGES_H
#define PAGES_H

#include <stdint.h>

typedef enum PAGE_OBJ_TYPE_
{
    PAGE_OBJ_NONE = 0,
    PAGE_OBJ_GF,
    PAGE_OBJ_DRIVE,
    PAGE_OBJ_CUSTOM,
    PAGE_OBJ_USER
} PAGE_OBJ_TYPE_;

typedef struct PAGE_
{
    PAGE_OBJ_TYPE_ type;
    void *object;
} PAGE_;

void Page_Init(PAGE_ *p);
void Page_Attach(PAGE_ *p, void *obj, PAGE_OBJ_TYPE_ type);
void *Page_Get(const PAGE_ *p);
PAGE_OBJ_TYPE_ Page_GetType(const PAGE_ *p);

#endif
