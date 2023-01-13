---
statblock: true
name: 'Owlbear Recluse - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 3
ac: 13
hp: 119
hit_dice: '14d10 + 42'
speed: '40 ft., climb 20 ft.'
stats:
    - 18
    - 12
    - 16
    - 3
    - 12
    - 5
skillsaves:
    - { perception: 3 }
    - { stealth: 3 }
senses: 'darkvision 60 ft., passive Perception 13'
traits:
    - { name: 'Keen Sight and Smell', desc: 'The owlbear has advantage on Perception checks that rely on sight or smell.' }
actions:
    - { name: Multiattack, desc: 'The owlbear attacks with its beak and claws.' }
    - { name: Beak, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 9 (1d10 + 4) piercing damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 13 (2d8 + 4) slashing damage.' }
'bonus actions':
    'bonus actions': ['The owl bear recluse hasthe following additional bonus actions, which it uses only while bloodied:']
    0: { name: 'Elite Recovery', desc: 'The owlbear ends one negative effect currently affecting it. It can use this bonus action as long as it has at least 1 hit point, even while unconscious or incapacitated.' }
    1: { name: 'Flapping Fury', desc: "If it's not grappling a creature, the owlbear jumps up to half its Speed without provoking opportunity attacks and then makes a claws attack with advantage." }
    2: { name: 'Owlbear Hug', desc: 'The owlbear attacks a Medium or smaller creature with its claws. On a hit, the target is grappled (escape DC 14). Until this grapple ends, the target is restrained. The owlbear can grapple one creature at a time.' }
    3: { name: Peck, desc: 'The owlbear makes two beak attacks against a creature it is grappling.' }
combat:
    - { name: 'The owlbear attacks the closest creature', desc: "It retreats if it's bloodied and not within 5 feet of an enemy." }

---
```statblock
monster: Owlbear Recluse - A5E
```
