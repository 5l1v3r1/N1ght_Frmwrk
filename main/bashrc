# ~/.bashrc: executed by bash(1) for non-login shells.

# colors
darkgrey="$(tput bold ; tput setaf 0)"
white="$(tput bold ; tput setaf 7)"
red="$(tput bold; tput setaf 1)"
green="$(tput bold; tput setaf 2)"
yellow="$(tput bold; tput setaf 3)"
purple="$(tput bold; tput setaf 4)"
pink="$(tput bold; tput setaf 5)"
cyan="$(tput bold; tput setaf 6)"
nc="$(tput sgr0)"

# Note: PS1 and umask are already set in /etc/profile. You should not
# need this unless you want different defaults for root.
# PS1='${debian_chroot:+($debian_chroot)}\h:\w\$ '
export PS1="\[$green\][ \[$cyan\]\H \[$green\]]\[$darkgrey\]- \[$white\]on\[$darkgrey\] -\[$green\][ \[$white\]\w\[$cyan\] \[$green\]]\\n\[$red\] > \[$nc\]"
# umask 022

# You may uncomment the following lines if you want `ls' to be colorized:
export LS_OPTIONS='--color=auto'
# eval "`dircolors`"
alias ls='ls $LS_OPTIONS'
alias ll='ls $LS_OPTIONS -l'
alias l='ls $LS_OPTIONS -lA'
#
# Some more alias to avoid making mistakes:
# alias rm='rm -i'
# alias cp='cp -i'
# alias mv='mv -i'
