---
statblock: true
name: 'Wraith Lord'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 13
ac: 15
hp: 171
hit_dice: '18d8 + 90'
speed: '40 ft., fly 60 ft. (hover)'
stats:
    - 14
    - 20
    - 20
    - 16
    - 18
    - 18
damage_resistances: 'acid, lightning, psychic, thunder; damage from nonmagical weapons'
damage_immunities: 'cold, necrotic, poison'
condition_immunities: 'charmed, fatigue, grappled, paralyzed, petrified, poisoned, prone, restrained, unconscious'
senses: 'truesight 120 ft., passive Perception 14'
languages: 'the languages it knew in life'
traits:
    - { name: 'Aura of Fear', desc: "A creature that starts its turn within 30 feet of a wraith lord makes a DC 17 Wisdom saving throw. On a failure, it is frightened until the start of its next turn. If a creature's saving throw is successful or the effect ends for it, it is immune to any wraith or wraith lord's Aura of Fear for 24 hours." }
    - { name: Evil, desc: 'The wraith lord radiates an Evil aura.' }
    - { name: Incorporeal, desc: 'The wraith lord can move through creatures and objects. It takes 5 (1d10) force damage if it ends its turn inside an object. If it takes radiant damage, it loses this trait until the end of its next turn.' }
    - { name: 'Light Sensitivity', desc: 'While in sunlight or bright light cast by a fire, the wraith lord has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
    - { name: 'Undead Nature', desc: "A wraith doesn't require air, food, drink, or sleep." }
actions:
    - { name: Multiattack, desc: 'The wraith lord can use Paralyzing Terror. It then uses Life Drain twice. If in corporeal form, it then makes a greatsword attack.' }
    - { name: 'Life Drain', desc: 'The wraith targets a creature within 5 feet, forcing it to make a DC 18 Constitution saving throw. On a failure, the creature takes 17 (5d6) necrotic damage, or 24 (7d6) necrotic damage if it is frightened or surprised, and its hit point maximum is reduced by an amount equal to the damage taken. This reduction lasts until the creature finishes a long rest. It dies if its hit point maximum is reduced to 0.' }
    - { name: 'Greatsword (Corporeal Form Only)', desc: "Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 12 (2d6 + 5) slashing damage plus 17 (5d6) poison damage, and the target makes a DC 18 Constitution saving throw. On a failure, the target is poisoned for 24 hours. While poisoned in this way, the target can't regain hit points. If a creature dies while poisoned in this way, its spirit rises as a wraith under the wraith lord's control 1 minute after its death." }
    - { name: 'Paralyzing Terror', desc: 'The wraith lord targets a frightened creature within 60 feet, forcing it to make a DC 18 Wisdom saving throw. On a failure, the target is paralyzed for 1 minute. It repeats the saving throw at the end of each of its turns, ending the effect on itself on a success.' }
    - { name: 'Create Wraith', desc: "The wraith lord touches a humanoid corpse it killed up to 1 day ago. The creature's spirit rises as a wraith under the wraith lord's control." }
    - { name: 'Corporeal Form (1/Day)', desc: 'The wraith lord takes on a material form. In material form, it loses its incorporeal trait, its fly speed, and its immunity to the grappled, prone, and restrained conditions. The wraith instantly reverts to its incorporeal form if it is bloodied, and it can do so voluntarily at any time as an action.' }
combat:
    - { name: 'The wraith lord ambushes in corporeal form', desc: 'It uses Paralyzing Terror on a frightened creature, then Life Drain and its greatsword on the same target (preferably a paralyzed one). It avoids creatures in sunlight or firelight if it can. When bloodied, it becomes incorporeal and continues using Paralyzing Terror and Life Drain. It flees if reduced to 40 hit points or fewer.' }

---
```statblock
monster: Wraith Lord
```
